<?php

namespace App\Livewire\Common;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProfileImageUpdate extends Component
{
    use WithFileUploads;

    #[Rule("required|image|max:5120")]
    public $image;
    public $user;
    public $profile;
    public $allowEdit;

    public function mount($user, $allowEdit = true)
    {
        $this->user = $user;
        $this->allowEdit = $allowEdit;
        match ($user->role) {
            'Logistics Provider' => $this->profile = $user->logistic_provider,
            'Insurance Provider' => $this->profile = $user->insurance_provider,
            'Shipper' => $this->profile = $user->shipper, // Assuming Shipper has a profile
            'Admin' => $this->profile = $user->admin, // Assuming Admin has
            default => $this->profile = null, // Handle other roles if necessary
        };
    }

    public function save()
    {
        $this->validate();
        $file = $this->image;
        $name = $this->user->email. '.' .$file->extension();
        $this->user->logistic_provider()->update(['logo' => $file->storeAs('logos', $name, 'public')]);
        $this->reset('image');
        session()->flash("image");
    }

    public function render()
    {
        return view('livewire.common.profile-image-update');
    }
}
