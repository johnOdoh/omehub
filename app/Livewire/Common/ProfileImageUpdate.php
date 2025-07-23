<?php

namespace App\Livewire\Common;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

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
        $this->profile = getProfile();
    }

    public function save()
    {
        $this->validate();
        $file = $this->image;
        $name = $this->user->email. '.' .$file->extension();
        $this->profile->logo = $file->storeAs('logos', $name, 'public');
        $this->profile->save();
        // $this->user->logistic_provider()->update(['logo' => $file->storeAs('logos', $name, 'public')]);
        $this->reset('image');
        session()->flash("image");
    }

    public function render()
    {
        return view('livewire.common.profile-image-update');
    }
}
