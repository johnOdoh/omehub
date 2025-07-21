<?php

namespace App\Livewire\Common\Quote;

use App\Models\Request;
use Livewire\Component;

class RequestDetails extends Component
{
    public $request;
    public $has_button = true;

    public function mount(Request $request, $has_button)
    {
        $this->request = $request;
        $this->has_button = $has_button;
    }

    public function render()
    {
        return view('livewire.common.quote.request-details');
    }
}
