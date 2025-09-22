<?php

namespace App\Livewire\Common\Sustainability;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\SustainabilityInvoice;

class Invoices extends Component
{
    #[Title('My Invoices')]
    public function render()
    {
        $invoices = SustainabilityInvoice::orderBy('month', 'desc')->paginate(20);
        return view('livewire.common.sustainability.invoices', ['invoices' => $invoices]);
    }
}
