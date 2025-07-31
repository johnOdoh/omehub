<?php

namespace App\Livewire\Admin\Shipments;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\On;

class Info extends Component
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
        return view('livewire.admin.shipments.info');
    }
}
