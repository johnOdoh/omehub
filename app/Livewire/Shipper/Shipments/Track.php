<?php

namespace App\Livewire\Shipper\Shipments;

use App\Models\Shipment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Track extends Component
{
    use WithFileUploads;
    public $shipment;
    public $track;
    public $isTracking;
    public $isProof = false;
    public $proof;

    public function mount(Shipment $shipment, $track)
    {
        $this->shipment = $shipment;
        $this->track = $track;
        $this->isTracking = $track ? true : false;
    }

    public function save()
    {
        $this->validate([
            'proof' => 'required|file|mimes:pdf|max:1024', // 1MB max
        ]);
        $this->shipment->proof_of_payment = $this->proof->store('shipments/payments', 'public');
        $this->shipment->save();
        $this->isProof = false;
        session()->flash('success', 'Proof of payment uploaded successfully.');
    }

    public function back()
    {
        $this->track ? $this->dispatch('return') : null;
        !$this->isTracking ? $this->dispatch('return') : null;
        $this->isTracking = false;
    }

    public function render()
    {
        return view('livewire.shipper.shipments.track');
    }
}
