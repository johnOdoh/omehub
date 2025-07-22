<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use App\Models\Shipment;

class UserInfo extends Component
{
    public $user;
    public $profile;
    public $stats = [];

    public function mount(User $user)
    {
        $this->user = $user;
        switch ($user->role) {
            case 'Shipper':
                $this->profile = $user->shipper;
                $this->stats['quotes'] = $user->requests()->count();
                $this->stats['shipments'] = $user->shipments()->count();
                break;
            case 'Logistics Provider':
                $this->profile = $user->logistic_provider;
                $this->stats['quotes'] = $user->quotes()->count();
                $this->stats['shipments'] = Shipment::whereHas('quote', function ($q) {
                        $q->where('user_id', request()->user()->id);
                    })->count();
                break;
            case 'Insurance Provider':
                $this->profile = $user->insurance_provider;
                $this->stats['quotes'] = $user->insuranceQuotes()->count();
                $this->stats['shipments'] = Shipment::whereHas('insurance_quote', function ($q) {
                        $q->where('user_id', request()->user()->id);
                    })->count();
                break;
            default:
                abort(404);
        }
    }

    public function verifyUser()
    {
        $this->profile->is_verified = true;
        $this->profile->save();
        session()->flash('message', 'User approved successfully.');
    }

    public function render()
    {
        return view('livewire.admin.users.user-info');
    }
}
