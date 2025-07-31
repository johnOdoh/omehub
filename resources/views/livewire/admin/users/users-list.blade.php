<div class="container-fluid p-0">
    @if (!$user)
        <div class="mb-2">
            <h1 class="h3 d-inline align-middle">Users</h1>
        </div>
        @if (session('message')) <span x-show="notify('{{ session('message') }}')"></span> @endif
        <div class="card">
            <div class="card-header px-4 pt-4">
                <div class="card-actions float-end">
                    <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="fa fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("All User")' href="#">All Users</a>
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("Shipper")' href="#">Shippers</a>
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("Logistics Provider")' href="#">Logistics Providers</a>
                            <a class="dropdown-item" wire:click.prevent='changeCurrent("Insurance Provider")' href="#">Insurance Providers</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">{{ $current }}s</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>KYC</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $users->firstItem() + $loop->index }}</td>
                                    <td>
                                        @if ($user->profile() )<img src="{{ asset('storage/'.$user->profile()->logo) }}" width="40" height="40" class="rounded-circle me-2" alt="logo"> @else N/A @endif
                                    </td>
                                    <td>
                                        <div class="flex-grow-1">
                                            <strong>{{ $user->name }}</strong>
                                            <div class="text-muted">{{ $user->email }}</div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">{{ $user->role }}</span></td>
                                    <td><span class="badge bg-{{ $user->profile() && $user->profile()->is_verified ? 'success' : 'warning' }}">{{ $user->profile() && $user->profile()->is_verified ? 'Verified' : 'Unverified' }}</span></td>
                                    <td><span class="badge bg-{{ $user->status == 'Active' ? 'success' : 'warning' }}">{{ $user->status }}</span></td>
                                    <td class="table-action">
                                        @if ($user->profile())
                                            <a href="#" class="me-2" wire:click.prevent='selectUser({{ $user->id }})'>
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        @else
                                            <span class="me-2" data-bs-toggle="tooltip" data-bs-placement="left" title="User has not created a profile yet">
                                                <i class="fa fa-low-vision"></i>
                                            </span>
                                        @endif
                                        <div class="dropdown position-relative d-inline">
                                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                @if ($user->status == 'Active')
                                                    <a class="dropdown-item" wire:confirm='Are you sure you want to suspend this user?' wire:click.prevent='suspend({{ $user->id }})' href="#">Suspend User</a>
                                                @else
                                                    <a class="dropdown-item" wire:confirm='Are you sure you want to reactivate this user?' wire:click.prevent='activate({{ $user->id }})' href="#">Reactivate User</a>
                                                @endif
                                                <a class="dropdown-item" wire:confirm='Are you sure you want to delete this user? This action cannot be reversed' wire:click.prevent='delete({{ $user->id }})' href="#">Delete User</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7"><h5>No Users Yet</h5></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    @else
        <livewire:admin.users.user-info :$user />
    @endif
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @script
        <script>
            $wire.on('loadJs', () => {
                setTimeout(() => {
                    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    });
                }, 500);
            })
        </script>
    @endscript
</div>
