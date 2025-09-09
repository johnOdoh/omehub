<?php

namespace App\Livewire\Common\Documents;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class CommercialInvoice extends Component
{
    public $countries;
    public $waybill_no;
    public $reference_no;
    public $reason;
    public $export_date;
    public $origin;
    public $destination;
    public $exporter_name;
    public $exporter_address;
    public $exporter_phone;
    public $exporter_country;
    public $exporter_city;
    public $exporter_zip;
    public $consignee_name;
    public $consignee_address;
    public $consignee_phone;
    public $consignee_country;
    public $consignee_city;
    public $consignee_zip;
    public $importer_name;
    public $importer_address;
    public $importer_phone;
    public $importer_country;
    public $importer_city;
    public $importer_zip;
    public $has_importer = false;
    public $currency;
    public $unit;
    public $parcel_no = [];
    public $type = [];
    public $qty_per_package = [];
    public $parcel_unit = [];
    public $description = [];
    public $hs_code = [];
    public $weight = [];
    public $qty = [];
    public $amount = [];
    public $index = 0;

    public function mount()
    {
        $this->countries = DB::table('countries')->orderBy('name')->get('name');
    }

    public function generate()
    {
        $this->validate([
            'waybill_no' => 'required|string',
            'reference_no' => 'required|string',
            'reason' => 'required|string',
            'export_date' => 'required|date',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'exporter_name' => 'required|string',
            'exporter_address' => 'required|string',
            'exporter_phone' => 'required|numeric',
            'exporter_country' => 'required|string',
            'exporter_city' => 'required|string',
            'exporter_zip' => 'required|string',
            'consignee_name' => 'required|string',
            'consignee_address' => 'required|string',
            'consignee_phone' => 'required|numeric',
            'consignee_country' => 'required|string',
            'consignee_city' => 'required|string',
            'consignee_zip' => 'required|string',
            'importer_name' => 'nullable|required_if_accepted:has_importer|string',
            'importer_address' => 'nullable|required_if_accepted:has_importer|string',
            'importer_phone' => 'nullable|required_if_accepted:has_importer|numeric',
            'importer_country' => 'nullable|required_if_accepted:has_importer|string',
            'importer_city' => 'nullable|required_if_accepted:has_importer|string',
            'importer_zip' => 'nullable|required_if_accepted:has_importer|string',
            'currency' => 'required|string',
            'unit' => 'required|string',
            'parcel_no.*' => 'required|string',
            'type.*' => 'required|string',
            'qty_per_package.*' => 'required|integer|min:1',
            'parcel_unit.*' => 'required|string',
            'description.*' => 'required|string',
            'hs_code.*' => 'required|string',
            'weight.*' => 'required|numeric|min:0.01',
            'qty.*' => 'required|integer|min:1',
            'amount.*' => 'required|numeric|min:0.01'
        ]);
        if (count($this->qty) > $this->index+1) {
            array_splice($this->parcel_no, $this->index+1);
            array_splice($this->type, $this->index+1);
            array_splice($this->qty_per_package, $this->index+1);
            array_splice($this->parcel_unit, $this->index+1);
            array_splice($this->description, $this->index+1);
            array_splice($this->hs_code, $this->index+1);
            array_splice($this->weight, $this->index+1);
            array_splice($this->qty, $this->index+1);
            array_splice($this->amount, $this->index+1);
        }
        $pdf = Pdf::loadView('public.commercial-invoice', $this->all());
        session()->flash('success', 'Commercial Invoice generated successfully');
        $this->resetExcept('countries');
        return response()->streamDownload(function() use ($pdf) {
            echo $pdf->output();
        }, 'commercial-invoice.pdf');
    }

    public function render()
    {
        return view('livewire.common.documents.commercial-invoice');
    }
}
