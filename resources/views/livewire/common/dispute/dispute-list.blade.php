<div class="container-fluid p-0">
    @if ($claim_id)
        <livewire:common.dispute.view :claim="$claim_id" />
    @else
        <div class="card">
            <div class="card-header pb-0">
                <h5 class="card-title mb-0">Claims {{ $q == 'against' ? 'Against You' : '' }}</h5>
            </div>
            <hr class="mb-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Complainant</th>
                                <th>Defendant</th>
                                <th>Status</th>
                                <th>Created On</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($claims as $claim)
                                <tr>
                                    <td>{{ $claims->firstItem() + $loop->index }}</td>
                                    <td>{{ $claim->user->name }}</td>
                                    <td>{{ $claim->defendant->name }}</td>
                                    <td><span class="badge bg-info">{{ $claim->status }}</span></td>
                                    <td>{{ $claim->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" wire:click="viewClaim({{ $claim->id }})">View</button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="6"><h5>No Claims Yet</h5></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $claims->links() }}
                </div>
            </div>
        </div>
    @endif
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
