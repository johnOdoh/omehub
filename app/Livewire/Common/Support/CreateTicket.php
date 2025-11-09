<?php

namespace App\Livewire\Common\Support;

use App\Mail\SupportTicket;
use App\Models\Ticket;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;

class CreateTicket extends Component
{
    use WithFileUploads;
    public $subject;
    public $message;
    public $attachment;

    public function send()
    {
        $this->validate([
            'subject' => 'required|string|max:191',
            'message' => 'required|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);
        $ticket_number = request()->user()->initials().rand(100000, 999999);
        Mail::to(config('app.mail'))
            ->send(new SupportTicket(
                $this->subject,
                $this->message,
                $ticket_number,
                $this->attachment
            ));
        Ticket::create([
            'user_id' => request()->user()->id,
            'subject' => $this->subject,
            'ticket_number' => $ticket_number
        ]);
        session()->flash('success');
        $this->reset();
    }

    #[Title('Create Support Ticket')]
    public function render()
    {
        return view('livewire.common.support.create-ticket');
    }
}
