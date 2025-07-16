<?php

namespace App\Livewire\Shipper\Shipments;

use Livewire\Attributes\On;
use Livewire\Component;

class ShipmentList extends Component
{
    public $shipmentId;
    public $isList = true;
    public $track;

    public function viewShipment($id, $track = null)
    {
        $this->shipmentId = $id;
        $this->isList = false;
        $this->track = $track;
    }

    #[On('return')]
    public function back()
    {
        $this->isList = true;
        $this->shipmentId = null;
        $this->track = null;
    }
    public function render()
    {
        return view('livewire.shipper.shipments.shipment-list', [
            'shipments' => request()->user()->shipments()->paginate(5)
        ]);
    }
}
