<?php

namespace App\Livewire\Logistics;

use App\Models\Request;
use Livewire\Component;
use App\Models\Shipment;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    public $quotesCount;
    public $requestsCount;
    public $shipmentsCount;

    public function mount()
    {
        $this->requestsCount = Request::where('is_closed', false)->count();
        $this->quotesCount = request()->user()->quotes()->whereHas('request', function ($q) {
            $q->where('is_closed', false);
        })->count();
        $this->shipmentsCount = Shipment::whereHas('quote', function ($q) {
            $q->where('user_id', request()->user()->id);
        })->count();
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.logistics.dashboard', [
            'user' => request()->user()
        ]);
    }
}
