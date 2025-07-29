<?php

namespace App\Livewire\Common\Dispute;

use App\Models\Claim;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class DisputeList extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $claim_id;
    #[Url]
    public $q;

    public function viewClaim($id)
    {
        $this->claim_id = $id;
    }

    public function back()
    {
        $this->claim_id = null;
    }

    public function render()
    {
        $claims = match ($this->q) {
            'against' => Claim::where('defendant_id', request()->user()->id)->latest()->paginate(10),
            'admin' => Claim::latest()->paginate(10),
            default => request()->user()->claims()->latest()->paginate(10)
        };
        return view('livewire.common.dispute.dispute-list', [
            'claims' => $claims
        ]);
    }
}
