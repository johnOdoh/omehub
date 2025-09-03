<?php

namespace App\Livewire\Sustainability;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.sustainability.dashboard');
    }
}
