<?php

namespace App\Livewire\Shipper\Quotes;

use Livewire\Component;
use Livewire\Attributes\On;

class QuoteList extends Component
{
    public $request;
    public $current_quote = [];

    public function mount($request)
    {
        $this->request = $request;
        $this->current_quote = [
            'custom' => 0,
            'cost' => 0
        ];
    }

    #[On('loadJs')]
    public function populate_quote($cost, $custom)
    {
        $this->current_quote = [
            'custom' => $custom,
            'cost' => $cost
        ];
    }

    public function render()
    {
        return view('livewire.shipper.quotes.quote-list');
    }
}
