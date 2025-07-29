<?php

namespace App\Livewire\Common\Dispute;

use App\Models\Claim;
use Livewire\Component;
use Livewire\WithFileUploads;

class View extends Component
{
    use WithFileUploads;
    public $claim;
    public $body;
    public $attachment = [];

    public function mount(Claim $claim)
    {
        $this->claim = $claim;
    }

    public function reply()
    {
        $this->validate([
            'body' => 'required',
            'attachment' => 'nullable|array|max:3',
            'attachment.*' => 'image|mimes:jpg,jpeg,png|max:2124',
        ]);
        $attachments = [];
        foreach ($this->attachment as $attachment) {
            $attachments[] = $attachment->store('claims', 'public');
        }
        $this->claim->replies()->create([
            'user_id' => request()->user()->id,
            'body' => $this->body,
            'attachments' => $attachments,
        ]);
        if ($this->claim->chat != 'both') {
            $this->claim->chat = 'closed';
            $this->claim->save();
        }
        $this->resetExcept('claim');
        session()->flash('created');
    }

    public function render()
    {
        return view('livewire.common.dispute.view');
    }
}
