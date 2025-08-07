<div class="container-fluid p-0">
    @if (session('success')) <span x-show="notify('{{ session('success') }}')"></span> @endif
    <div class="card">
        <div class="card-header pb-0">
            @if (auth()->user()->role == 'Admin')
                <div class="card-actions float-end">
                    <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="fa fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("All")'>All</a>
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("pending")'>Pending</a>
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("processing")'>Processing</a>
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("closed")'>Closed</a>
                        </div>
                    </div>
                </div>
            @endif
            <h5 class="card-title mb-0 text-capitalize">{{ auth()->user()->role == 'Admin' ? $current : '' }} Tickets</h5>
        </div>
        <hr class="mb-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            @if (auth()->user()->role == 'Admin')<th>User</th> @endif
                            <th>Ticket Number</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tickets as $ticket)
                            <tr>
                                <td>{{ $tickets->firstItem() + $loop->index }}</td>
                                @if (auth()->user()->role == 'Admin')
                                    <td><a href="{{ route('admin.user', $ticket->user_id) }}">{{ $ticket->user->name }}</a></td>
                                @endif
                                <td>{{ $ticket->ticket_number }}</td>
                                <td>{{ $ticket->subject }}</td>
                                <td><span class="text-capitalize badge bg-{{ $ticket->status == 'pending' ? 'warning' : ($ticket->status == 'processing' ? 'primary' : 'success') }}">{{ $ticket->status }}</span></td>
                                <td>{{ $ticket->created_at->format('d M, Y') }}</td>
                                <td class="d-flex gap-2">
                                    @if (auth()->user()->role == 'Admin')
                                        @if ($ticket->status == 'pending')
                                            <button class="btn btn-primary btn-sm" wire:click="changeStatus({{ $ticket->id }}, 'processing')">Mark as Processing</button>
                                        @elseif($ticket->status == 'processing')
                                            <button class="btn btn-success btn-sm" wire:click="changeStatus({{ $ticket->id }}, 'closed')">Mark as Closed</button>
                                        @else
                                            <span>-</span>
                                        @endif
                                    @else
                                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $ticket->id }})" wire:confirm='Are you sure you want to delete this ticket?'>Delete</button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="7"><h5>No Tickets Yet</h5></td></tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $tickets->links() }}
            </div>
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
