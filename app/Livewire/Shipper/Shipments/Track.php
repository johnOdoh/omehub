<?php

namespace App\Livewire\Shipper\Shipments;

use App\Models\Shipment;
use Livewire\Component;

class Track extends Component
{
    public $shipment;
    public $track;
    public $isTracking;

    public function mount(Shipment $shipment, $track)
    {
        $this->shipment = $shipment;
        $this->track = $track;
        $this->isTracking = $track ? true : false;
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
        return view('livewire.shipper.shipments.track');
    }
}
