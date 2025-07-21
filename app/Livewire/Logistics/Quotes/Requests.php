<?php

namespace App\Livewire\Logistics\Quotes;

use App\Models\Quote;
use App\Models\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Requests extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    // private $filter = false;
    public $request;
    public $show_submit_quote = false;
    public int $duration = 1;
    public $custom;
    public $cost;
    public $date;

    public function viewRequest(Request $request)
    {
        $this->request = $request;
        $this->dispatch('request-changed');
    }

    public function closeRequest()
    {
        $this->request = null;
    }

    public function toggleQuote()
    {
        $this->show_submit_quote = !$this->show_submit_quote;
    }

    public function submitQuote()
    {
        $this->validate([
            'custom' => 'required|numeric|min:1',
            'cost' => 'required|numeric|min:1',
            'date' => 'required|date',
            'duration' => 'required|integer|min:1',
        ]);
        Quote::create([
            'request_id' => $this->request->id,
            'user_id' => request()->user()->id,
            'custom' => $this->custom,
            'cost' => $this->cost,
            'departure_date' => $this->date,
            'duration' => $this->duration,
        ]);
        session()->flash('submitted');
        $this->request = null;
        $this->show_submit_quote = false;
    }

    public function render()
    {
        $requests = Request::where('is_closed', false)
            ->where(function ($query) {
                $query->whereHas('quotes', function ($q) {
                    $q->where('user_id', '!=', request()->user()->id);
                })->orDoesntHave('quotes');
            })
            ->latest()
            ->paginate(2);
        return view('livewire.logistics.quotes.requests', ['requests' => $requests]);
    }
}
