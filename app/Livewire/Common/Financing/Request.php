<?php

namespace App\Livewire\Common\Financing;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

class Request extends Component
{
    use WithFileUploads;
    public $amount;
    public $currency;
    public $reason;
    public $document;
    public $partner;
    public $partners;

    public function mount()
    {
        $partners = User::where('status', 'Active')
            ->where('role', 'Financial Partner')
            ->get()
            ->map(fn ($user) => ['name' => $user->name, 'id' => $user->id])
            ->toArray();
        $this->partners = $partners;
    }

    public function create()
    {
        if (!request()->user()->profile?->is_verified) return;
        $this->validate([
            'amount' => 'required|numeric',
            'reason' => 'required|string',
            'currency' => 'required|string',
            'partner' => 'required|integer',
            'document' => 'required|file|mimes:pdf|max:2048'
        ]);
        $partner = User::where('id', $this->partner)->exists();
        if (!$partner) abort(404);
        $document = $this->document->store('financing_requests', 'public');
        request()->user()->financeRequests()->create([
            'partner_id' => $this->partner,
            'amount' => $this->amount,
            'reason' => $this->reason,
            'currency' => $this->currency,
            'document' => $document
        ]);
        $this->resetExcept('partners');
        session()->flash('success');
    }

    #[Title('Request Financing')]
    public function render()
    {
        return view('livewire.common.financing.request');
    }
}
