<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $name;
    public $email;
    public $role;

    public function create()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string|in:Financial Partner,Sustainability Partner'
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'verification_payment' => true,
            'password' => Hash::make($this->email)
        ]);
        session()->flash('created', 'Partner created successfully.');
        $this->reset();
    }

    #[Title('Create Partner')]
    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
