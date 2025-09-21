<?php

namespace App\Livewire\Common\Financing;

use Livewire\Component;
use App\Models\Financing;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class RequestList extends Component
{
    use WithPagination;
    public $request_details;

    public function getRequest(Financing $request)
    {
        $this->close();
        $this->request_details = $request;
        $this->dispatch('request-changed');
    }

    public function accept()
    {
        $this->request_details->user_status = 'accepted';
        $this->request_details->save();
        session()->flash('success', 'Financing Conditions Accepted');
    }

    public function reject()
    {
        $this->request_details->user_status = 'rejected';
        $this->request_details->save();
        session()->flash('success', 'Financing Conditions Rejected');
    }

    public function close()
    {
        $this->request_details = null;
    }

    #[Title('My Financing Requests')]
    public function render()
    {
        $requests = request()->user()->financeRequests()->latest()->paginate(perPage: 20);
        return view('livewire.common.financing.request-list', ['requests' => $requests]);
    }
}
