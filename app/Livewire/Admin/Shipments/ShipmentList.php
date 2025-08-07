<?php

namespace App\Livewire\Admin\Shipments;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class ShipmentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $shipment;

    public function select($id)
    {
        $this->shipment = $id;
    }

    #[Title('Shipments')]
    public function render()
    {
        $shipments = Shipment::latest()->paginate(20);
        return view('livewire.admin.shipments.shipment-list', [
            'shipments' => $shipments
        ]);
    }
}
