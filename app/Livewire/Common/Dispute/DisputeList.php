<?php

namespace App\Livewire\Common\Dispute;

use App\Models\Claim;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\File;

class DisputeList extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $claim_id;
    #[Url]
    public $q;
    public $current = 'All';

    public function changeCurrent($newCurrent)
    {
        $this->current = $newCurrent;
        $this->resetPage();
    }

    public function withdraw($id)
    {
        $claim = Claim::findOrFail($id);
        if ($claim->user_id != request()->user()->id) return;
        foreach ($claim->attachments as $attachment) {
            File::delete(public_path('storage/'.$attachment));
        }
        $claim->delete();
        session()->flash('withdrawn');
    }

    public function viewClaim($id)
    {
        $this->claim_id = $id;
    }

    public function back()
    {
        $this->claim_id = null;
    }

    #[Title('Dispute List')]
    public function render()
    {
        $claims = match ($this->q) {
            'against' => Claim::where('defendant_id', request()->user()->id)->latest()->paginate(perPage: 20),
            'admin' => $this->current === 'All' ? Claim::latest()->paginate(20) : Claim::where('status', $this->current)->latest()->paginate(20),
            default => request()->user()->claims()->latest()->paginate(20)
        };
        return view('livewire.common.dispute.dispute-list', [
            'claims' => $claims
        ]);
    }
}
