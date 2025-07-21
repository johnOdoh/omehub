<?php

namespace App\Livewire\Logistics\Quotes;

use App\Models\Quote;
use App\Models\Request;
use Livewire\Component;
use Livewire\WithPagination;

class QuotesSent extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    // private $filter = false;
    public $request;
    public $show_submit_quote = false;
    public $duration;
    public $custom;
    public $cost;
    public $date;
    public $id;

    public function viewRequest(Request $request)
    {
        $this->request = $request;
        $quote = $request->quotes()->where('user_id', request()->user()->id)->first();
        $this->custom = $quote->custom;
        $this->cost = $quote->cost;
        $this->date = $quote->departure_date->format('Y-m-d');
        $this->duration = $quote->duration;
        $this->id = $quote->id;
    }

    public function closeRequest()
    {
        $this->request = null;
    }

    public function updateQuote()
    {
        $this->validate([
            'custom' => 'required|numeric|min:1',
            'cost' => 'required|numeric|min:1',
            'date' => 'required|date',
            'duration' => 'required|integer|min:1',
        ]);
        Quote::find( $this->id)->update([
            'custom' => $this->custom,
            'cost' => $this->cost,
            'departure_date' => $this->date,
            'duration' => $this->duration,
        ]);
        session()->flash('updated');
    }

    public function deleteQuote()
    {
        Quote::destroy($this->id);
        session()->flash('deleted');
        $this->request = null;
    }

    public function render()
    {
        $requests = Request::whereHas('quotes', function ($q) {
                $q->where('user_id', request()->user()->id);
            })
            ->where('is_closed', false)
            ->orderByDesc('created_at')
            ->paginate(2);
        return view('livewire.logistics.quotes.quotes-sent', ['requests' => $requests]);
    }
}
