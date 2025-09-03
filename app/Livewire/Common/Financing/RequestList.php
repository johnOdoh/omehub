<?php

namespace App\Livewire\Common\Financing;

use App\Models\User;
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
