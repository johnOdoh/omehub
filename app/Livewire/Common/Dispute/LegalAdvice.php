<?php

namespace App\Livewire\Common\Dispute;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Mail;
use App\Mail\LegalAdvice as LegalAdviceMail;

class LegalAdvice extends Component
{
    public $message;
    public $subject;

    public function send()
    {
        $this->validate([
            'message' => 'required|string',
            'subject' => 'required|string'
        ]);
        Mail::to(config('app.email'))
            ->send(new LegalAdviceMail($this->message, $this->subject));
        session()->flash('success', 'Legal advice request sent successfully.');
        $this->reset();
    }

    #[Title('Request Legal Advice')]
    public function render()
    {
        return view('livewire.common.dispute.legal-advice');
    }
}
