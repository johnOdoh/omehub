<?php

namespace App\Livewire\Finance;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        $counts = request()->user()->financingRequests()
            ->selectRaw("status, COUNT(*) as total")
            ->groupBy('status')
            ->pluck('total', 'status');
        return view('livewire.finance.dashboard', ['counts' => $counts]);
    }
}
