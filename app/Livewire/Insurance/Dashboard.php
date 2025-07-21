<?php

namespace App\Livewire\Insurance;

use App\Models\Request;
use App\Models\Shipment;
use Livewire\Component;

class Dashboard extends Component
{
    public $quotesCount;
    public $requestsCount;
    public $activeCoversCount;

    public function mount()
    {
        $this->requestsCount = Request::where('is_closed', false)->where('needs_insurance', true)->count();
        $this->quotesCount = request()->user()->insuranceQuotes()->whereHas('request', function ($q) {
                $q->where('is_closed', false);
            })->count();
        $this->activeCoversCount = Shipment::whereHas('insurance_quote', function ($q) {
                $q->where('user_id', request()->user()->id);
            })->count();
    }

    public function render()
    {
        return view('livewire.insurance.dashboard', [
            'user' => request()->user()
        ]);
    }
}
