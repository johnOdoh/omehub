<?php

namespace App\Livewire\Logistics\Shipments;

use App\Models\Shipment;
use Livewire\Component;
use Livewire\Attributes\On;

class Shipments extends Component
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
        return view('livewire.logistics.shipments.shipments', [
            'shipments' => Shipment::whereHas('quote', function ($q) {
                $q->where('user_id', request()->user()->id);
            })->paginate(10)
        ]);
    }
}
