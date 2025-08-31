<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class UsersList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
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

    public function suspend($userId)
    {
        $user = User::findOrFail($userId);
        $user->status = 'Suspended';
        $user->save();
        session()->flash('message', 'User Suspended successfully.');
    }

    public function activate($userId)
    {
        $user = User::findOrFail($userId);
        $user->status = 'Active';
        $user->save();
        session()->flash('message', 'User Reactivated successfully.');
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        session()->flash('message', 'User deleted successfully.');
    }

    #[Title('Users')]
    public function render()
    {
        $users = match ($this->current) {
            'All User' => User::where('role', '!=', 'admin')->latest()->paginate(20),
            default => User::where('role', $this->current)->latest()->paginate(20)
        };
        return view('livewire.admin.users.users-list', [
            'users' => $users
        ]);
    }
}
