<?php

namespace App\Livewire\Logistics;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.logistics.dashboard', [
            'user' => request()->user()
        ]);
    }
}
