<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GetQuote extends Component
{
    public $countries;
    public $origin;
    public $destination;
    public $type;
    public $freight;
    public $mode;
    public $qty = 1;
    public $weight;
    public $volume;
    public $container_type;

    public function mount()
    {
        $this->countries = DB::table('countries')->get('name');
        $this->dispatch('load-countries', 0);
    }

    public function resetFields($propertyName)
    {
        // $this->dispatch('load-countries', 0);
    }

    public function requestQuote()
    {
        // dd($this->mode);
        $this->validate([
            'origin' => 'required',
            'destination' => 'required',
            'type' => 'required',
            'freight' => 'required',
            'mode' => 'required'
        ], [
            'mode.required' => 'Please select a container type.'
        ]);
        if ($this->mode === 'FCL') {
            $this->validate([
                'qty' => 'required|integer|min:1',
                'container_type' => 'required'
            ]);
            $dimension = implode(',', [
                $this->qty,
                $this->container_type
            ]);
        } else {
            $this->validate([
                'qty' => 'required|integer|min:1',
                'weight' => 'required|numeric',
                'volume' => 'required|numeric'
            ]);
            $dimension = implode(',', [
                $this->qty,
                $this->weight,
                $this->volume
            ]);
        }
        Request::create([
            'user_id' => request()->user()->id,
            'pickup' => $this->origin,
            'destination' => $this->destination,
            'cargo_type' => $this->type,
            'freight_type' => $this->freight,
            'container_type' => $this->mode,
            'dimensions' => $dimension
        ]);
        $this->resetExcept('countries');
        request()->session()->flash('submitted');
    }

    public function render()
    {
        return view('livewire.shipper.quotes.get-quote');
    }
}
