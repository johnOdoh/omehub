<?php

namespace App\Livewire\Logistics\Shipments;

use Livewire\Component;
use App\Models\Shipment;

class Details extends Component
{
    public $shipment;
    public $track;
    public $isTracking;
    public $shipmentId;

    public function mount(Shipment $shipment, $track)
    {
        $this->shipment = $shipment;
        $this->track = $track;
        $this->isTracking = $track ? true : false;
        $this->shipmentId = $this->shipment->id;
    }

    public function trackShipment()
    {
        $this->isTracking = true;
    }

    public function back()
    {
        $this->track ? $this->dispatch('return') : null;
        !$this->isTracking ? $this->dispatch('return') : null;
        $this->isTracking = false;
    }

    public function render()
    {
        return view('livewire.logistics.shipments.details');
    }
}
