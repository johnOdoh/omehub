<?php

namespace App\Livewire\Logistics\Shipments;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Shipments extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
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

    #[Title('Shipments')]
    public function render()
    {
        return view('livewire.logistics.shipments.shipments', [
            'shipments' => Shipment::whereHas('quote', function ($q) {
                $q->where('user_id', request()->user()->id);
            })->latest()->paginate(perPage: 20)
        ]);
    }
}
