<?php

namespace App\Livewire\Common\Support;

use App\Models\Ticket;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Support Tickets')]
class Tickets extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $current = 'All';

    public function changeStatus($id, $status)
    {
        if (!in_array($status, ['pending', 'processing', 'closed'])) {
            return;
        }
        $ticket = Ticket::findOrFail($id);
        $ticket->status = $status;
        $ticket->save();
        session()->flash('success', 'Ticket status updated.');
    }

    public function changeCurrent($newCurrent)
    {
        if (!in_array($newCurrent, ['All', 'pending', 'processing', 'closed'])) {
            return;
        }
        $this->current = $newCurrent;
        $this->resetPage();
    }

    public function delete($id)
    {
        $ticket = Ticket::findOrFail($id);
        if ($ticket->user_id != request()->user()->id) return;
        $ticket->delete();
        session()->flash('success', 'Ticket deleted successfully.');
    }

    public function render()
    {
        if (request()->user()->role == 'Admin') {
            if ($this->current == 'All') {
                $tickets = Ticket::latest()->paginate(20);
            } else {
                $tickets = Ticket::where('status', $this->current)->latest()->paginate(20);
            }
        } else {
            $tickets = request()->user()->tickets()->paginate(20);
        }
        return view('livewire.common.support.tickets', [
            'tickets' => $tickets,
        ]);
    }
}
