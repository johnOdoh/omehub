<?php

namespace App\Livewire\Admin\Admins;

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
            'role' => 'required|string|in:Admin,Legal Partner,Shipment Auditor'
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => 'Admin',
            'admin_role' => $this->role,
            'password' => Hash::make($this->email)
        ]);
        session()->flash('created', 'Admin created successfully.');
        $this->reset();
    }

    #[Title('Create Admin')]
    public function render()
    {
        return view('livewire.admin.admins.create');
    }
}
