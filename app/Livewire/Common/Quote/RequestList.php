<?php

namespace App\Livewire\Common\Quote;

use App\Models\Request;
use Livewire\Component;

class RequestList extends Component
{
    public function render()
    {
        $query = Request::where('is_closed', false);
        switch (request()->user()->role) {
            case 'Shipper':
                $requests = $query->where('shipper_id', request()->user()->id);
                break;
            case 'Insurance Provider':
                $query = $query->where('needs_insurance', true)
                    ->where(function ($query) {
                        $query->whereHas('insurance_quotes', function ($q) {
                            $q->where('user_id', '!=', request()->user()->id);
                        })->orDoesntHave('insurance_quotes');
                    });
                break;
            case 'Logistics Provider':
                $query = $query->where(function ($q) {
                    $q->whereHas('quotes', function ($q) {
                        $q->where('user_id', '!=', request()->user()->id);
                    })->orDoesntHave('quotes');
                });
                break;
            default:
                $requests = $query;
                break;
        }
        $requests = $query->latest()->paginate(10);
        return view('livewire.common.quote.request-list', ['requests' => $requests]);
    }
}
