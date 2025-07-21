<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $usersCount;
    public $logisticsProvidersCount;
    public $insuranceProvidersCount;
    public $shippersCount;

    public function mount()
    {
        $this->usersCount = User::where('role', '!=', 'Admin')->count();
        $this->logisticsProvidersCount = User::where('role', 'Logistics Provider')->count();
        $this->insuranceProvidersCount = User::where('role', 'Insurance Provider')->count();
        $this->shippersCount = User::where('role', 'Shipper')->count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard', [
            'user' => request()->user()
        ]);
    }
}
