<?php

namespace App\Livewire\Common\Profile;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentUpload extends Component
{
    use WithFileUploads;

    public $document;
    public $number;
    public $name;
    public $bank;

    public function mount()
    {
        if (!request()->user()->verification_payment) {
            return $this->redirect(route('user.profile', absolute: true), true);
        }
    }

    public function save()
    {
        $this->validate([
            'document' => 'required|file|mimes:pdf|max:2048',
            'number' => 'required|numeric',
            'name' => 'required',
            'bank' => 'required',
        ]);
        $filename = $this->document->store('documents', 'public');
        request()->user()->profile()->update([
            'document' => [
                'number' => $this->number,
                'name' => $this->name,
                'bank' => $this->bank,
                'document' => $filename
            ]
        ]);
        $this->redirect(route('user.profile', ['u' => 1]), true);
    }

    #[Title('Verification Document Upload')]
    public function render()
    {
        return view('livewire.common.profile.document-upload');
    }
}
