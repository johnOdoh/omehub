<?php

namespace App\Livewire\Finance;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $counts = request()->user()->financingRequests()
            ->selectRaw("status, COUNT(*) as total")
            ->groupBy('status')
            ->pluck('total', 'status');
        return view('livewire.finance.dashboard', ['counts' => $counts]);
    }
}
