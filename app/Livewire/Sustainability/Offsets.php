<?php

namespace App\Livewire\Sustainability;

use App\Models\User;
use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Offsets extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user;
    public $shipment_details;
    public $generate = false;
    public $filter;

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

    public function updateFilter()
    {
        $this->close();
        $this->resetPage();
    }

    public function close()
    {
        $this->user = null;
        $this->generate = false;
        $this->shipment_details = null;
    }

    #[On('invoice-generated')]
    public function invoiceGenerated()
    {
        $this->generate = false;
        session()->flash('generated');
    }

    #[Title('Carbon Offsets')]
    public function render()
    {
        if ($this->filter) {
            [$year, $month] = explode('-', $this->filter);
            $shipments = Shipment::whereNotNull('carbon_offset')
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->paginate(20);
        } else {
            $shipments = Shipment::whereNotNull('carbon_offset')->paginate(20);
        }
        return view('livewire.sustainability.offsets', ['shipments' => $shipments]);
    }
}
