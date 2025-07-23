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
    public $carbon_offset = 5.00;
    public $offset_emission = false;

    public function mount(Quote $quote)
    {
        $this->quote = $quote;
        $this->total = $quote->cost + $quote->custom;
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

    public function book()
    {
        // dd('dfsdf');
        request()->user()->shipments()->create([
            'quote_id' => $this->quote->id,
            'insurance_quote_id' => $this->selectedInsurance ? $this->selectedInsurance->id : null,
            'carbon_offset' => $this->offset_emission ? $this->carbon_offset : null,
            'amount' => $this->total,
            'status' => 'processing',
            'tracking_number' => date('Y').rand(10000, 99999).request()->user()->initials(),
            'updates' => [
                [
                    'message' => 'Your shipment is being processed.',
                    'timestamp' => now()->toDateTimeString()
                ]
            ]
        ]);
        $this->quote->request()->update(['is_closed' => true]);
        $this->redirect(route('shipper.shipments',[] , absolute: false), navigate: true);
        session()->flash('booked');
    }

    public function render()
    {
        return view('livewire.shipper.quotes.book');
    }
}
