<?php

namespace App\Livewire\Sustainability;

use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    public $offsets_count;

    public function mount()
    {
        $this->offsets_count = Shipment::whereNotNull('carbon_offset')->count();
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.sustainability.dashboard');
    }
}
