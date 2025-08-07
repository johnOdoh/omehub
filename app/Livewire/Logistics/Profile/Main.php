<?php

namespace App\Livewire\Logistics\Profile;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

class Main extends Component
{
    public $user;
    public $hasProfile = true;
    public $showProfile = true;
    public $showCreateProfile = false;
    public $showEditProfile = false;

    public function mount()
    {
        $this->user = request()->user();
        $this->hasProfile = $this->user->logistic_provider()->exists();
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
        // $this->dispatch('refresh');
    }

    #[Title('Profile')]
    public function render()
    {
        return view('livewire.logistics.profile.main');
    }
}
