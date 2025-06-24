<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\Quote;
use App\Models\Request;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class QuoteRequests extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    // private $filter = false;
    public $request;
    public $current_quote = [];
    public $dimensions = [];
    public $codes = [];

    public function mount()
    {
        $this->current_quote = [
            'custom' => 0,
            'cost' => 0
        ];
    }

    public function view_request(Request $request)
    {
        // dd($this->current_quote);
        $this->request = $request;
        $this->dimensions = explode(';', $request->dimensions);
        $this->codes[] = DB::table('countries')->where('name', $request->pickup)->firstOrFail('code');
        $this->codes[] = DB::table('countries')->where('name', $request->destination)->firstOrFail('code');
    }

    #[On('loadJs')]
    public function populate_quote($cost, $custom)
    {
        $this->current_quote = [
            'custom' => $custom,
            'cost' => $cost
        ];
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
