<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\Request;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

class RequestQuote extends Component
{
    public $countries;
    public $index = 0;
    public $origin;
    public $destination;
    public $type;
    public $freight;
    public $currency;
    public $hs_code;
    public $incoterm;
    public $insurance;
    public $declaration = false; // New property for declaration
    public $mode;
    public $qty = [];
    public $weight = [];
    public $volume = [];
    public $container_type = [];

    public function mount()
    {
        $this->countries = DB::table('countries')->orderBy('name')->get('name');
        $this->dispatch('load-countries', 0);
    }

    public function requestQuote()
    {
        if(!request()->user()->shipper || !request()->user()->shipper->is_verified) {
            return;
        }
        $this->validate([
            'origin' => 'required',
            'destination' => 'required',
            'type' => 'required',
            'currency' => 'required',
            'hs_code' => 'required',
            'incoterm' => 'required',
            'insurance' => 'required',
            'freight' => 'required',
            'mode' => 'required',
            'declaration' => 'accepted'
        ], [
            'mode.required' => 'Please select a container type.'
        ]);
        array_splice($this->qty, $this->index+1);
        array_splice($this->container_type, $this->index+1);
        if ($this->mode === 'FCL') {
            $this->validate([
                'qty' => 'required||array',
                'qty.*' => 'required|integer|min:1',
                'container_type' => 'required|array',
                'container_type.*' => 'required|string'
            ]);
            $dimensions = [];
            for ($i=0; $i < count($this->qty); $i++) {
                $dimensions[] = implode(',', [
                    $this->qty[$i],
                    $this->container_type[$i],
                ]);
            }
            $dimensions = implode(';', $dimensions);
        } else {
            array_splice($this->weight, $this->index+1);
            array_splice($this->volume, $this->index+1);
            $this->validate([
                'qty' => 'required|array',
                'qty.*' => 'required|integer|min:1',
                'weight' => 'required|array',
                'weight.*' => 'required|numeric',
                'volume' => 'required|array',
                'volume.*' => 'required|numeric'
            ]);
            $dimensions = [];
            for ($i=0; $i < count($this->qty); $i++) {
                $dimensions[] = implode(',', [
                    $this->qty[$i],
                    $this->weight[$i],
                    $this->volume[$i]
                ]);
            }
            $dimensions = implode(';', $dimensions);
        }
        Request::create([
            'user_id' => request()->user()->id,
            'pickup' => $this->origin,
            'destination' => $this->destination,
            'cargo_type' => $this->type,
            'currency' => $this->currency,
            'hs_code' => $this->hs_code,
            'incoterm' => $this->incoterm,
            'freight_type' => $this->freight,
            'needs_insurance' => $this->insurance === 'Yes' ? true : false,
            'container_type' => $this->mode,
            'dimensions' => $dimensions,
            'expires_at' => now()->addHour()
        ]);
        $this->resetExcept('countries');
        session()->flash('submitted');
    }

    #[Title('Request Quote')]
    public function render()
    {
        return view('livewire.shipper.quotes.request-quote');
    }
}
