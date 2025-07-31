<?php

namespace App\Livewire\Insurance\Shipments;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\On;

class Details extends Component
{
    public $shipment;
    public $generate = false;

    public function mount(Shipment $shipment)
    {
        $this->shipment = $shipment;
    }

    #[On('invoice-generated')]
    public function invoiceGenerated()
    {
        $this->generate = false;
        session()->flash('generated');
    }

    public function render()
    {
        return view('livewire.insurance.shipments.details');
    }
}
