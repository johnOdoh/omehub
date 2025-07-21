<?php

namespace App\Livewire\Insurance\Quotes;

use App\Models\InsuranceQuote;
use App\Models\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Requests extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = "bootstrap";
    // private $filter = false;
    public $request;
    public $show_submit_quote = false;
    public $charge;
    public $max;
    public $file;

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
            'charge' => 'required|numeric|min:1',
            'max' => 'required|numeric|min:1',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        $path = $this->file->store('insurance_quotes', 'public');
        InsuranceQuote::create([
            'request_id' => $this->request->id,
            'user_id' => request()->user()->id,
            'charge' => $this->charge,
            'max_payout' => $this->max,
            'file_url' => $path
        ]);
        session()->flash('submitted');
        $this->request = null;
        $this->show_submit_quote = false;
    }

    public function render()
    {
        $requests = Request::where('is_closed', false)
            ->where('needs_insurance', true)
            ->where(function ($query) {
                $query->whereHas('insurance_quotes', function ($q) {
                    $q->where('user_id', '!=', request()->user()->id);
                })->orDoesntHave('insurance_quotes');
            })
            ->latest()
            ->paginate(2);
        return view('livewire.insurance.quotes.requests', ['requests' => $requests]);
    }
}
