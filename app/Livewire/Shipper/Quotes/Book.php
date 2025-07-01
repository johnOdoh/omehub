<?php

namespace App\Livewire\Shipper\Quotes;

use App\Models\InsuranceQuote;
use App\Models\Quote;
use Livewire\Component;

class Book extends Component
{
    public $quote;
    public $selectedInsurance;
    public $total;
    public $carbon_offset;
    public $offset_emission = false;

    public function mount(Quote $quote)
    {
        $this->quote = $quote;
        $this->total = $quote->cost + $quote->custom;
        $this->carbon_offset = $this->total/10;
    }

    public function toggleInsurance(InsuranceQuote $insuranceQuote)
    {
        if ($this->selectedInsurance) {
            if ($this->selectedInsurance->id == $insuranceQuote->id) {
                $this->selectedInsurance = null;
                $this->total -= $insuranceQuote->charge;
            } else {
                $this->total -= $this->selectedInsurance->charge;
                $this->selectedInsurance = $insuranceQuote;
                $this->total += $insuranceQuote->charge;
            }
            return;
        }
        $this->selectedInsurance = $insuranceQuote;
        $this->total += $insuranceQuote->charge;
    }

    public function toggleOffset()
    {
        if ($this->offset_emission) {
            $this->total += $this->carbon_offset;
        } else {
            $this->total -= $this->carbon_offset;
        }
    }

    public function render()
    {
        return view('livewire.shipper.quotes.book');
    }
}
