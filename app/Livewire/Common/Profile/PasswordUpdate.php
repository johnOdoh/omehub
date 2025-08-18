<?php

namespace App\Livewire\Common\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;

class PasswordUpdate extends Component
{
    #[Rule("required|string|min:8|confirmed")]
    public $password;

    #[Rule("required|string|current_password")]
    public $current_password;

    public $password_confirmation;

    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function update_password()
    {
        $this->validate();
        $this->password = Hash::make($this->password);
        $this->user->update(["password" => $this->password]);
        $this->reset();
        session()->flash("password");
    }

    public function render()
    {
        return view('livewire.common.profile.password-update');
    }
}
