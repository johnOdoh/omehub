<?php

namespace App\Livewire\Shipper\Shipments;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ShipmentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    #[Url]
    public $booked;
    public $shipmentId;
    public $isList = true;
    public $track;

    public function mount()
    {
        if ($this->booked) {
            session()->flash('booked');
        }
    }

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
            'shipments' => request()->user()->shipments()->latest()->paginate(5)
        ]);
    }
}
