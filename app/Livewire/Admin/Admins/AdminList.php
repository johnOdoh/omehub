<?php

namespace App\Livewire\Admin\Admins;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $admin;

    public function select(User $admin)
    {
        $this->admin = $admin;
        $this->dispatch('admin-changed');
    }

    public function close()
    {
        $this->admin = null;
    }

    public function switch($role)
    {
        $this->admin->admin_role = $role;
        $this->admin->save();
        session()->flash('message', 'Admin role changed successfully.');
    }

    public function toggleStatus($status)
    {
        if (!in_array($status, ['Active', 'Suspended'], false)) return;
        $this->admin->status = $status;
        $this->admin->save();
        session()->flash('message', 'Admin status changed..');
    }

    public function delete($userId)
    {
        $this->admin->delete();
        session()->flash('message', 'Admin deleted successfully.');
        $this->admin = null;
    }

    public function render()
    {
        return view('livewire.admin.admins.admin-list', [
            'admins' => User::where('role', 'Admin')
                ->whereNot('id', request()->user()->id)
                ->latest()
                ->paginate(20)
        ]);
    }
}
