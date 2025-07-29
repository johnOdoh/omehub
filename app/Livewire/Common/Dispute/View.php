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

    public function resolve()
    {
        $this->claim->status = 'resolved';
        $this->claim->chat = 'closed';
        $this->claim->save();
        session()->flash('resolved');
    }

    public function chat($input)
    {
        if (!in_array($input, ['complainant', 'defendant', 'both', 'closed'])) return;
        $this->claim->chat = $input;
        $this->claim->save();
        session()->flash('updated');
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
        $this->dispatch('clear');
        session()->flash('created');
    }

    public function render()
    {
        return view('livewire.common.dispute.view');
    }
}
