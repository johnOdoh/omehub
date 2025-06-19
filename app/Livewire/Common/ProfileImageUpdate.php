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

    public function mount($user)
    {
        $this->user = $user;
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
