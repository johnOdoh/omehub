<?php

namespace App\Livewire\Common\Profile;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\Attributes\On;

class Main extends Component
{
    public $user;
    public $hasProfile = true;
    public $showProfile = true;
    public $showCreateProfile = false;
    public $showEditProfile = false;
    #[Url(as: 'u')]
    public $uploaded;
    public $isPersonal = false;

    public function mount()
    {
        $this->user = request()->user();
        $this->hasProfile = $this->user->profile();
        $this->isPersonal = $this->hasProfile && $this->user->role == 'Shipper' && $this->user->profile()->account_type == 'Personal';
    }

    public function createProfile()
    {
        $this->showProfile = false;
        $this->showCreateProfile = true;
    }

    public function editProfile()
    {
        $this->showProfile = false;
        $this->showEditProfile = true;
    }

    #[On('close-page')]
    public function closeCreateProfile()
    {
        $this->showProfile = true;
        $this->showCreateProfile = false;
        $this->showEditProfile = false;
    }

    #[On('profile-updated')]
    public function profileUpdated()
    {
        $this->hasProfile = true;
        $this->showProfile = true;
        $this->showCreateProfile = false;
        $this->showEditProfile = false;
        $this->isPersonal = $this->user->role == 'Shipper' && $this->user->profile()->account_type == 'Personal';
        // $this->dispatch('refresh');
    }

    #[On('uploaded')]
    public function show()
    {
        session()->flash('success', 'Profile updated successfully.');
        $this->uploaded = null;
    }

    public function render()
    {
        return view('livewire.common.profile.main');
    }
}
