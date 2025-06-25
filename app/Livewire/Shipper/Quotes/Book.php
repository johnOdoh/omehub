<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\Quote;
use Livewire\Component;

class Book extends Component
{
    public $quote;

    public function mount(Quote $quote)
    {
        $this->quote = $quote;
    }

    public function render()
    {
        return view('livewire.shipper.quotes.book');
    }
}
