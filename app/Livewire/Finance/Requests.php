<?php

namespace App\Livewire\Finance;

use App\Models\User;
use Livewire\Component;
use App\Models\Financing;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Requests extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $user_info;
    public $request_details;
    public $accepting = false;
    public $interest;
    public $duration;
    public $current;

    public function mount()
    {
        $this->current = 'All';
    }

    public function changeCurrent($newCurrent)
    {
        $this->current = $newCurrent;
        $this->resetPage();
    }

    public function getUser(User $user)
    {
        $this->close();
        $this->user_info = $user;
        $this->dispatch('user-changed');
    }

    public function getRequest(Financing $request)
    {
        $this->close();
        $this->request_details = $request;
        $this->dispatch('request-changed');
    }

    public function accept()
    {
        $this->validate([
            'interest' => 'required|numeric',
            'duration' => 'required|integer'
        ]);
        $this->request_details->status = "approved";
        $this->request_details->interest = $this->interest;
        $this->request_details->duration = $this->duration;
        $this->request_details->save();
        $this->reset('interest', 'duration');
        session()->flash('success', 'Financing Request accepted');
    }

    public function decline()
    {
        $this->request_details->status = "rejected";
        $this->request_details->save();
        session()->flash('success', 'Financing Request rejected');
    }

    public function close()
    {
        $this->request_details = $this->user_info = null;
        $this->accepting = false;
    }

    #[Title('Financing Requests')]
    public function render()
    {
        $requests = match ($this->current) {
            'All' => request()->user()->financingRequests()->latest()->paginate(20),
            default => request()->user()->financingRequests()
                ->where('status', $this->current)
                ->latest()
                ->paginate(20)
        };
        return view('livewire.finance.requests', ['requests' => $requests]);
    }
}
