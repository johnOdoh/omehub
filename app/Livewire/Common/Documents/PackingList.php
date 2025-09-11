<?php

namespace App\Livewire\Common\Documents;

use Livewire\Component;
use Livewire\Attributes\Title;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PackingList extends Component
{
    public $countries;
    public $invoice_no;
    public $order_no;
    public $cus_no;
    public $order_date;
    public $customer_name;
    public $customer_address;
    public $customer_phone;
    public $customer_country;
    public $customer_city;
    public $customer_zip;
    public $container_no;
    public $shipped_via;
    public $date_shipped;
    public $attention;
    public $comments;
    public $packed_by;
    public $item_no = [];
    public $qty = [];
    public $qty_shipped = [];
    public $qty_back = [];
    public $description = [];
    public $unit = [];
    public $unit_weight = [];
    public $total_weight = [];
    public $index = 0;

    public function mount()
    {
        $this->countries = DB::table('countries')->orderBy('name')->get('name');
    }

    public function generate()
    {
        $this->validate([
            'invoice_no' => 'required|string',
            'order_no' => 'required|string',
            'cus_no' => 'required|string',
            'order_date' => 'required|date',
            'customer_name' => 'required|string',
            'customer_address' => 'required|string',
            'customer_phone' => 'required|numeric',
            'customer_country' => 'required|string',
            'customer_city' => 'required|string',
            'customer_zip' => 'required|string',
            'container_no' => 'required|string',
            'shipped_via' => 'required|string',
            'date_shipped' => 'required|date',
            'attention' => 'required|string',
            'comments' => 'required|string',
            'packed_by' => 'required|string',
            'item_no.*' => 'required|string',
            'qty.*' => 'required|integer|min:1',
            'qty_shipped.*' => 'required|integer|min:1',
            'qty_back.*' => 'required|numeric|min:0',
            'description.*' => 'required|string',
            'unit.*' => 'required|string',
            'unit_weight.*' => 'required|numeric|min:0.01',
            'total_weight.*' => 'required|numeric|min:0.01'
        ]);
        if (count($this->qty) > $this->index+1) {
            array_splice($this->item_no, $this->index+1);
            array_splice($this->qty, $this->index+1);
            array_splice($this->qty_shipped, $this->index+1);
            array_splice($this->qty_back, $this->index+1);
            array_splice($this->description, $this->index+1);
            array_splice($this->unit, $this->index+1);
            array_splice($this->unit_weight, $this->index+1);
            array_splice($this->total_weight, $this->index+1);
        }
        $pdf = Pdf::loadView('public.packing-list', $this->except('countries'));
        session()->flash('success', 'Packing List generated successfully');
        $this->resetExcept('countries');
        return response()->streamDownload(function() use ($pdf) {
            echo $pdf->output();
        }, 'packing-list.pdf');
    }

    #[Title('Generate Packing List')]
    public function render()
    {
        return view('livewire.common.documents.packing-list');
    }
}
