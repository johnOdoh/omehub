<?php

namespace App\Livewire\Insurance\Shipments;

use App\Models\Shipment;
use Livewire\Component;
use Livewire\WithPagination;

class ShipmentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $shipment;

    public function viewShipment($id)
    {
        $this->shipment = $id;
    }

    public function render()
    {
        return view('livewire.insurance.shipments.shipment-list', [
            'shipments' => Shipment::whereHas('insurance_quote', function ($q) {
                $q->where('user_id', request()->user()->id);
            })->latest()->paginate(20)
        ]);
    }
}
