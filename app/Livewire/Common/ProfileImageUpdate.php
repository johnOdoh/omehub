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

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function save()
    {
        $this->validate();
        $file = $this->image;
        $name = $this->user->name. '.' .$file->extension();
        $this->user->update(['image' => $file->storeAs($this->role, $name, 'public')]);
        $this->reset('image');
        request()->session()->flash("image");
    }

    public function render()
    {
        return view('livewire.common.profile-image-update');
    }
}
