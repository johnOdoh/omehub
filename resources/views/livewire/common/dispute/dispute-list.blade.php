<div class="container-fluid p-0">
    @if ($claim_id)
        <livewire:common.dispute.view :claim="$claim_id" />
    @else
        @if (session('withdrawn')) <span x-show="notify('Claim Successfully Withdrawn')"></span> @endif
        <div class="card">
            <div class="card-header pb-0">
                @if ($q == 'admin')
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                <i class="fa fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("All")'>All</a>
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("Active")'>Active</a>
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("Resolved")'>Resolved</a>
                            </div>
                        </div>
                    </div>
                @endif
                <h5 class="card-title mb-0">{{ $q == 'admin' ? $current : '' }} Claims {{ $q == 'against' ? 'Against You' : '' }}</h5>
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
                                    @if ($q == 'admin')
                                        <td><a href="{{ route('admin.user', $claim->user_id) }}">{{ $claim->user->name }}</a></td>
                                        <td><a href="{{ route('admin.user', $claim->defendant_id) }}">{{ $claim->defendant->name }}</a></td>
                                    @else
                                        <td>{{ $claim->user->name }}</td>
                                        <td>{{ $claim->defendant->name }}</td>
                                    @endif
                                    <td><span class="text-capitalize badge bg-{{ $claim->status == 'active' ? 'primary' : 'success' }}">{{ $claim->status }}</span></td>
                                    <td>{{ $claim->created_at->format('d M, Y') }}</td>
                                    <td class="d-flex gap-2">
                                        <button class="btn btn-info btn-sm" wire:click="viewClaim({{ $claim->id }})">View</button>
                                        @if ($claim->user_id == auth()->user()->id && $claim->status == 'active')
                                            <button class="btn btn-success btn-sm" wire:click='withdraw({{ $claim->id }})' wire:confirm='Are you sure you want to withdraw this claim?'>Withdraw Claim</button>
                                        @endif
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
