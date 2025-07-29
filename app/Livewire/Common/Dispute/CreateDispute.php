<?php

namespace App\Livewire\Common\Dispute;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDispute extends Component
{
    use WithFileUploads;

    public $body;
    public $subject;
    public $defendant;
    public $suggestions;
    public $attachment = [];

    public function search($input)
    {
        if (strlen($input) < 3) {
            $this->suggestions = null;
            return;
        }
        $result = User::whereLike('name', "%$input%")->limit(5)
            ->whereNot('id', request()->user()->id)
            ->whereNot('role', 'Admin')
            ->pluck('name');
        $this->suggestions = $result;
        // dd($result);
    }

    public function select($option)
    {
        $this->defendant = $option;
        $this->suggestions = null;
    }

    public function create()
    {
        $this->suggestions = null;
        $this->validate([
            'body' => 'required',
            'subject' => 'required',
            'defendant' => 'required|exists:users,name',
            'attachment' => 'nullable|array|max:3',
            'attachment.*' => 'image|mimes:jpg,jpeg,png|max:2124',
        ]);
        $defendant_id = User::where('name', $this->defendant)->firstOrFail()->id;
        $attachments = [];
        foreach ($this->attachment as $attachment) {
            $attachments[] = $attachment->store('claims', 'public');
        }
        request()->user()->claims()->create([
            'defendant_id' => $defendant_id,
            'subject' => $this->subject,
            'body' => $this->body,
            'attachments' => $attachments,
        ]);
        $this->reset();
        session()->flash('created');
    }

    public function render()
    {
        return view('livewire.common.dispute.create-dispute');
    }
}
