<?php

namespace App\Livewire\Common\Financing;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

class Request extends Component
{
    public $amount;
    public $currency;
    public $reason;
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
            'partner' => 'required|integer'
        ]);
        $partner = User::where('id', $this->partner)->exists();
        if (!$partner) abort(404);
        request()->user()->financeRequests()->create([
            'partner_id' => $this->partner,
            'amount' => $this->amount,
            'reason' => $this->reason,
            'currency' => $this->currency
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
