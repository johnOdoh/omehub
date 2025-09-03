<?php

namespace App\Livewire\Sustainability;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Offsets extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Title('Offsets')]
    public function render()
    {
        $shipments = Shipment::whereNotNull('carbon_offset')->paginate(20);
        return view('livewire.sustainability.offsets', ['shipments' => $shipments]);
    }
}
