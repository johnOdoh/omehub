<?php

namespace App\Livewire\Admin\Shipments;

use App\Models\Shipment;
use Livewire\Component;
use Livewire\WithPagination;

class ShipmentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $shipment;

    public function select($id)
    {
        $this->shipment = $id;
    }

    public function render()
    {
        $shipments = Shipment::latest()->paginate(20);
        return view('livewire.admin.shipments.shipment-list', [
            'shipments' => $shipments
        ]);
    }
}
