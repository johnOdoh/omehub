<?php

namespace App\Livewire\Sustainability;

use Livewire\Component;
use App\Models\Shipment;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Offsets extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user;
    public $shipment_details;

    public function getUser(User $user)
    {
        $this->close();
        $this->user = $user;
    }

    public function getShipment(Shipment $shipment)
    {
        $this->close();
        $this->shipment_details = $shipment;
    }

    public function close()
    {
        $this->user = null;
        $this->shipment_details = null;
    }

    #[Title('Carbon Offsets')]
    public function render()
    {
        $shipments = Shipment::whereNotNull('carbon_offset')->paginate(20);
        return view('livewire.sustainability.offsets', ['shipments' => $shipments]);
    }
}
