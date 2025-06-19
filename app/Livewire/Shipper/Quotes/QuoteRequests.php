<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class QuoteRequests extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    // private $filter = false;
    public $request;
    public $dimensions = [];
    public $codes = [];

    public function view_request(Request $request)
    {
        $this->request = $request;
        $this->dimensions = explode(';', $request->dimensions);
        $this->codes[] = DB::table('countries')->where('name', $request->pickup)->firstOrFail('code');
        $this->codes[] = DB::table('countries')->where('name', $request->destination)->firstOrFail('code');
    }

    public function close_request()
    {
        $this->request = null;
        $this->codes = [];
    }

    public function render()
    {
        $requests = request()->user()->requests()->where('is_closed', false)->orderByDesc('created_at')->paginate(2);
        return view('livewire.shipper.quotes.requests', ['requests' => $requests]);
    }
}
