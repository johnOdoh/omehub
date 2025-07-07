<?php

namespace App\Livewire\Insurance;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.insurance.dashboard', [
            'user' => request()->user()
        ]);
    }
}
