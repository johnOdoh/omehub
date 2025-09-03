<?php

namespace App\Livewire\Common\Dispute;

use App\Mail\NotifyDefendant;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class CreateDispute extends Component
{
    use WithFileUploads;

    public $body;
    public $subject;
    public $defendant;
    public $defendant_id;
    public $suggestions;
    public $test = true;
    public $attachment = [];

    public function search($input)
    {
        if (strlen($input) < 3) {
            $this->suggestions = null;
            return;
        }
        $result = User::where('status', 'Active')
            ->whereNot('role', 'Admin')
            ->whereNot('id', request()->user()->id)
            ->whereLike('name', "%$input%")->limit(5)
            ->map(fn ($user) => ['name' => $user->name, 'id' => $user->id])
            ->toArray();
        $this->suggestions = $result;
        // dd($result);
    }

    public function select($id, $name)
    {
        $this->defendant_id = $id;
        $this->defendant = $name;
        $this->suggestions = null;
    }

    public function create()
    {
        if (!request()->user()->profile?->is_verified) return;
        $this->suggestions = null;
        $this->validate([
            'body' => 'required',
            'subject' => 'required',
            'defendant' => 'required|string',
            'attachment' => 'nullable|array|max:3',
            'attachment.*' => 'image|mimes:jpg,jpeg,png|max:2124',
        ]);
        $defendant = User::where('id', $this->defendant_id)->firstOrFail();
        if (!$defendant) abort(404);
        $attachments = [];
        foreach ($this->attachment as $attachment) {
            $attachments[] = $attachment->store('claims', 'public');
        }
        request()->user()->claims()->create([
            'defendant_id' => $this->defendant_id,
            'subject' => $this->subject,
            'body' => $this->body,
            'attachments' => $attachments,
        ]);
        Mail::to($defendant)->send(new NotifyDefendant(
            $defendant->name,
            request()->user()->name,
            $this->subject
        ));
        $this->reset();
        $this->dispatch('clear');
        session()->flash('created');
    }

    #[Title('Raise Claim')]
    public function render()
    {
        return view('livewire.common.dispute.create-dispute');
    }
}
