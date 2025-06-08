<?php

namespace App\Livewire\Logistics;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AddQuote extends Component
{
    public $countries;
    public float $full;
    public float $half;
    public float $cbm;
    public $origin;
    public $destination;
    public int $duration;

    public function mount()
    {
        $this->countries = DB::table('countries')->get('name');
        $this->dispatch('load-countries', 0);
    }

    public function createQuote()
    {
        // dd($this);
        $this->validate([
            'full' => 'required|numeric|min:1',
            'half' => 'required|numeric|min:1',
            'cbm' => 'required|numeric|min:1',
            'origin' => 'required|array|max:255',
            'destination' => 'required|array|max:255',
            'duration' => 'required|integer|min:1',
        ]);
        request()->user()->quotes()->create([
            'full_container' => $this->full,
            'half_container' => $this->half,
            'volume' => $this->cbm,
            'from' => $this->origin['value'],
            'to' => $this->destination['value'],
            'duration' => $this->duration,
        ]);
        request()->session()->flash("created");
        $this->dispatch('load-countries', 500);
    }

    public function render()
    {
        return view('livewire.logistics.add-quote');
    }
}
