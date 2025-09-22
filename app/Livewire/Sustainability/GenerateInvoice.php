<?php

namespace App\Livewire\Sustainability;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Shipment;
use App\Models\SustainabilityInvoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;

class GenerateInvoice extends Component
{
    public $shipments;
    public $month;
    public $name;
    public $number;
    public $swift;
    public $address;
    public $date;

    public function generate()
    {
        $this->validate([
            'name' => 'required|string',
            'number' => 'required|numeric',
            'swift' => 'required|string',
            'address' => 'nullable|string',
            'date' => 'required|date',
            'month' => 'required|date|unique:sustainability_invoices,month'
        ],
    [
            'month.unique' => 'An invoice for the selected month already exists.'
        ]);
        [$year, $month] = explode('-', $this->month);
        $this->shipments = Shipment::whereNotNull('carbon_offset')
            ->whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->get();
        if ($this->shipments->isEmpty()) {
            $this->addError('month', 'No shipment(s) with carbon offsets found for the selected month.');
            return;
        }
        $filename = uniqid(more_entropy: true).'.pdf';
        $this->date = Carbon::parse($this->date)->format('d/m/Y');
        $this->month = Carbon::parse($this->month)->format('F Y');
        $pdf = Pdf::loadView('public.offset-invoice', [
            'shipments' => $this->shipments,
            'from' => request()->user(),
            'data' => $this->except('shipments')
        ]);
        $path = storage_path('app/public/offset_invoices'); // Example path
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
        $pdf->save(storage_path("app/public/offset_invoices/$filename"));
        SustainabilityInvoice::create([
            'name' => $this->month,
            'month' => $year.'-'.$month,
            'url' => 'offset_invoices/'.$filename
        ]);
        $this->dispatch('invoice-generated');
    }

    public function render()
    {
        return view('livewire.sustainability.generate-invoice');
    }
}
