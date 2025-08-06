<?php

namespace App\Livewire\Logistics\Shipments;

use App\Models\Shipment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tracking extends Component
{
    use WithFileUploads;
    public $shipment;
    public $message = '';
    public $timestamp = '';
    public $status;
    public $location;
    public $proof;
    public $isDelivered = false;

    public function mount(Shipment $shipment)
    {
        $this->shipment = $shipment;
        $this->status = $shipment->status;
        $this->location = $shipment->current_location;
    }

    public function switchView()
    {
        if ($this->status === 'Delivered') {
            $this->isDelivered = true;
        }
    }

    public function updateStatus()
    {
        if ($this->isDelivered) {
            $this->validate([
                'status' => 'required|string|in:Delivered',
                'proof' => 'required|file|mimes:pdf|max:1024'
            ]);
            $this->proof = $this->proof->store('shipments/delivery', 'public');
            $this->shipment->update([
                'status' => $this->status,
                'proof_of_delivery' => $this->proof
            ]);
        }
        else {
            $this->validate([
                'status' => 'required|string|in:Processing,In Transit,Arrived,Delivered,Delayed',
                'location' => 'required|string',
            ]);
            $this->shipment->update([
                'status' => $this->status,
                'current_location' => $this->location
            ]);
        }
        session()->flash('success', 'Shipment Status updated successfully.');
    }

    public function updateTracking()
    {
        $this->validate([
            'message' => 'required|string',
            'timestamp' => 'required|date',
        ]);
        $details = [
            'message' => $this->message,
            'timestamp' => Carbon::parse($this->timestamp)->toDateTimeString()
        ];
        //convert the array to a collection in order to sort by timestamp, then convert it back and reindex it
        $this->shipment->updates = array_values(collect(array_merge($this->shipment->updates, [$details]))->sortBy('timestamp')->toArray());
        $this->shipment->save();
        session()->flash('success', 'Tracking Information updated successfully.');
        $this->reset('message', 'timestamp');
    }

    public function deleteUpdate($index)
    {
        $updates = $this->shipment->updates;
        unset($updates[$index]);
        $this->shipment->updates = array_values($updates);
        $this->shipment->save();
        session()->flash('success', 'Tracking Information deleted successfully.');
    }

    public function render()
    {
        return view('livewire.logistics.shipments.tracking');
    }
}
