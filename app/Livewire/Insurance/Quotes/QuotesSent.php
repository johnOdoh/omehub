<?php

namespace App\Livewire\Insurance\Quotes;

use App\Models\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\InsuranceQuote;
use Livewire\Attributes\Title;

class QuotesSent extends Component
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
    public $fileUrl;
    public $id;

    public function viewRequest(Request $request)
    {
        $this->request = $request;
        $quote = $request->insurance_quotes()->where('user_id', request()->user()->id)->first();
        $this->charge = $quote->charge;
        $this->max = $quote->max_payout;
        $this->fileUrl = $quote->file_url;
        $this->id = $quote->id;
    }

    public function closeRequest()
    {
        $this->request = null;
    }

    public function updateQuote()
    {
        $this->validate([
            'charge' => 'required|numeric',
            'max' => 'required|numeric',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);
        $quote = InsuranceQuote::find($this->id);
        if ($this->file) $this->file->storeAs('', $quote->file_url, 'public');
        $quote->update([
            'charge' => $this->charge,
            'max_payout' => $this->max
        ]);
        session()->flash('updated');
    }

    public function deleteQuote()
    {
        InsuranceQuote::destroy($this->id);
        session()->flash('deleted');
        $this->request = null;
    }

    #[Title('My Quotes')]
    public function render()
    {
        $requests = Request::where('is_closed', false)
            ->whereHas('insurance_quotes', function ($q) {
                $q->where('user_id', request()->user()->id);
            })
            ->latest()
            ->paginate(2);
        return view('livewire.insurance.quotes.quotes-sent', ['requests' => $requests]);
    }
}
