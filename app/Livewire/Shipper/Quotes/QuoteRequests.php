<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\Quote;
use App\Models\Request;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

class QuoteRequests extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    // private $filter = false;
    public $request;
    public $quote_id;
    public $dimensions = [];
    public $codes = [];

    public function viewRequest(Request $request)
    {
        $this->request = $request;
        $this->dimensions = explode(';', $request->dimensions);
        $this->codes[] = DB::table('countries')->where('name', $request->pickup)->firstOrFail('code');
        $this->codes[] = DB::table('countries')->where('name', $request->destination)->firstOrFail('code');
    }

    public function deleteRequest(Request $request)
    {
        $request->delete();
        session()->flash('deleted');
    }

    public function closeRequest()
    {
        if($this->quote_id) $this->quote_id = null;
        else {
            $this->request = null;
            $this->codes = [];
        }
    }

    // #[On('selectQuote')]
    public function selectQuote($id)
    {
        $this->quote_id = $id;
    }

    #[Title('My Quote Requests')]
    public function render()
    {
        $requests = request()->user()->requests()->where('is_closed', false)->orderByDesc('created_at')->paginate(10);
        return view('livewire.shipper.quotes.requests', ['requests' => $requests]);
    }
}
