<?php

namespace App\Livewire\Insurance\Shipments;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class ShipmentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $shipment;

    public function viewShipment($id)
    {
        $this->shipment = $id;
    }

    #[Title('Shipments')]
    public function render()
    {
        return view('livewire.insurance.shipments.shipment-list', [
            'shipments' => Shipment::whereHas('insurance_quote', function ($q) {
                $q->where('user_id', request()->user()->id);
            })->latest()->paginate(20)
        ]);
    }
}
