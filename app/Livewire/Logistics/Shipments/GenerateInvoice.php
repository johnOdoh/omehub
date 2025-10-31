<?php

namespace App\Livewire\Logistics\Shipments;

use Carbon\Carbon;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;

class GenerateInvoice extends Component
{
    public $shipment;
    public $name;
    public $number;
    public $swift;
    public $address;
    public $date;

    public function generate()
    {
        $this->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'swift' => 'required|string',
            'address' => 'nullable|string',
            'date' => 'required|date'
        ]);
        $filename = uniqid(request()->user()->id).'.pdf';
        $this->date = Carbon::parse($this->date)->format('d/m/Y');
        $pdf = Pdf::loadView('public.invoice', [
            'shipment' => $this->shipment,
            'from' => $this->shipment->quote->user,
            'to' => $this->shipment->user,
            'type' => 'logistics',
            'data' => $this->except('shipment')
        ]);
        $path = storage_path('app/public/invoices'); // Example path
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
        $pdf->save(storage_path("app/public/invoices/$filename"));
        $this->shipment->logistics_invoice = $filename;
        $this->shipment->save();
        $this->resetExcept('shipment');
        $this->dispatch('invoice-generated');
    }

    public function render()
    {
        return view('livewire.logistics.shipments.generate-invoice');
    }
}
