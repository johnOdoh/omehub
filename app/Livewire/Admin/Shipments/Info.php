<?php

namespace App\Livewire\Admin\Shipments;

use Livewire\Component;
use App\Models\Shipment;

class Info extends Component
{
    public $shipment;

    public function mount(Shipment $shipment)
    {
        $this->shipment = $shipment;
    }

    public function render()
    {
        return view('livewire.admin.shipments.info');
    }
}
