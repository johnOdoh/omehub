<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    public $current;
    public $user;

    public function mount($current = 'All User')
    {
        $this->current = $current;
    }

    public function changeCurrent($newCurrent)
    {
        $this->current = $newCurrent;
        $this->resetPage();
    }

    public function selectUser($userId)
    {
        $this->user = $userId;
    }

    public function resetUser()
    {
        $this->user = null;
    }

    public function suspend($userId)
    {
        $user = User::findOrFail($userId);
        $user->status = 'Suspended';
        $user->save();
        session()->flash('message', 'User suspended successfully.');
    }

    public function activate($userId)
    {
        $user = User::findOrFail($userId);
        $user->status = 'Active';
        $user->save();
        session()->flash('message', 'User reactivated successfully.');
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        session()->flash('message', 'User deleted successfully.');
    }

    public function render()
    {
        match ($this->current) {
            'All User' => $users = User::where('role', '!=', 'admin')->latest()->paginate(10),
            'Shipper' => $users = User::where('role', 'Shipper')->latest()->paginate(10),
            'Logistics Provider' => $users = User::where('role', 'Logistics Provider')->latest()->paginate(10),
            'Insurance Provider' => $users = User::where('role', 'Insurance Provider')->latest()->paginate(10),
            default => abort(404)
        };
        return view('livewire.admin.users.users-list', [
            'users' => $users
        ]);
    }
}
