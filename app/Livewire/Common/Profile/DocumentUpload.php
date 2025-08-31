<?php

namespace App\Livewire\Common\Profile;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentUpload extends Component
{
    use WithFileUploads;

    public $user;
    public $document;
    public $number;
    public $name;
    public $bank;
    public $front;
    public $back;

    public function mount()
    {
        $this->user = request()->user();
        if (!$this->user->verification_payment || $this->user->profile->document) {
            return $this->redirect(route('user.profile'), true);
        }
    }

    public function save()
    {
        if ($this->user->role == 'Shipper' && $this->user->profile->account_type == 'Personal') {
            $this->validate([
                'front' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'back' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'number' => 'required|numeric',
                'name' => 'required',
                'bank' => 'required'
            ]);
            $front = $this->front->store('documents', 'public');
            $this->back ? $back = $this->back->store('documents', 'public') : $back = null;
            $document = [
                'front' => $front,
                'back' => $back,
                'number' => $this->number,
                'name' => $this->name,
                'bank' => $this->bank
            ];
        } else {
            $this->validate([
                'document' => 'required|file|mimes:pdf|max:2048',
                'number' => 'required|numeric',
                'name' => 'required',
                'bank' => 'required'
            ]);
            $filename = $this->document->store('documents', 'public');
            $document = [
                'number' => $this->number,
                'name' => $this->name,
                'bank' => $this->bank,
                'document' => $filename
            ];
        }
        request()->user()->profile()->update(['document' => $document]);
        $this->redirect(route('user.profile', ['u' => 1]), true);
    }

    #[Title('Verification Document Upload')]
    public function render()
    {
        return view('livewire.common.profile.document-upload');
    }
}
