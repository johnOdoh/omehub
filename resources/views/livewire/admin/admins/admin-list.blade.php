<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Admin list</h1>
        </div>
        <div class="col-auto ms-auto text-end mt-n1">
            <a class="btn btn-primary" href="{{ route('admin.create-admin') }}" wire:navigate>Create Admin</a>
        </div>
    </div>
    @if (session('message')) <span x-show="notify('{{ session('message') }}')"></span> @endif
    <div class="row">
        <div class="col-lg-{{ $admin ? '7' : '12' }}">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admins as $user)
                                    <tr>
                                        <td>{{ $admins->firstItem() + $loop->index }}</td>
                                        <td>
                                            <div class="flex-grow-1">
                                                <strong>{{ $user->name }}</strong>
                                                <div class="text-muted">{{ $user->email }}</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">{{ $user->admin_role }}</span></td>
                                        <td><span class="badge bg-{{ $user->status == 'Active' ? 'success' : 'warning' }}">{{ $user->status }}</span></td>
                                        <td class="table-action">
                                            <a href="#" class="me-2" wire:click.prevent='select({{ $user->id }})'>
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="5"><h5>No Admins Yet</h5></td></tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $admins->links() }}
                    </div>
                </div>
            </div>
        </div>
        @if ($admin)
            <div class="col-lg-5" x-ref="admin" x-on:admin-changed.window="$refs.admin.scrollIntoView({ behaviour: 'smooth' })">
                <div x-init="$refs.admin.scrollIntoView({ behaviour: 'smooth' })">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative d-inline">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @if ($admin->admin_role != 'Admin')
                                            <a class="dropdown-item" wire:click='switch("Admin")'>Switch to Admin</a>
                                        @endif
                                        @if ($admin->admin_role != 'Legal Partner')
                                            <a class="dropdown-item" wire:click='switch("Legal Partner")'>Switch to Legal Partner</a>
                                        @endif
                                        @if ($admin->admin_role != 'Shipment Auditor')
                                            <a class="dropdown-item" wire:click='switch("Shipment Auditor")'>Switch to Shipment Auditor</a>
                                        @endif
                                        <div class="dropdown-divider"></div>
                                        @if ($admin->status == 'Active')
                                            <a class="dropdown-item" wire:confirm='Are you sure you want to suspend this admin?' wire:click='toggleStatus("Suspended")'>Suspend Admin</a>
                                        @else
                                            <a class="dropdown-item" wire:confirm='Are you sure you want to reactivate this admin?' wire:click='toggleStatus("Active")'>Reactivate Admin</a>
                                        @endif
                                        <a class="dropdown-item" wire:confirm='Are you sure you want to delete this admin? This action cannot be reversed' wire:click='delete({{ $admin->id }})'>Delete Admin</a>
                                    </div>
                                </div>
                                <div class="dropdown position-relative d-inline">
                                    <a href="#" data-bs-display="static" style="margin-left: 10px" wire:click='close'>
                                        <i class="align-middle fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Admin Details</h5>
                        </div>
                        <hr class="mb-0">
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-user fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Name</div>
                                        <div class="fw-bold">{{ $admin->name }}</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-envelope fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Email</div>
                                        <div class="fw-bold">{{ $admin->email }}</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-user-cog fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Role</div>
                                        <div class="fw-bold">{{ $admin->admin_role }}</div>
                                    </div>
                                </li>
                                @if ($admin->profile)
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="fas fa-phone fa-fw me-1"></i>
                                        <div>
                                            <div class="text-muted small">Phone Number</div>
                                            <div class="fw-bold">{{ $admin->profile->dial_code.' '.$admin->profile->phone }}</div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="fas fa-map-pin fa-fw me-1"></i>
                                        <div>
                                            <div class="text-muted small">Address</div>
                                            <div class="fw-bold">{{ $admin->profile->address }}</div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="fas fa-tag fa-fw me-1"></i>
                                        <div>
                                            <div class="text-muted small">Zip</div>
                                            <div class="fw-bold">{{ $admin->profile->zip }}</div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="fas fa-home fa-fw me-1"></i>
                                        <div>
                                            <div class="text-muted small">City</div>
                                            <div class="fw-bold">{{ $admin->profile->city }}</div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="fas fa-globe fa-fw me-1"></i>
                                        <div>
                                            <div class="text-muted small">Country</div>
                                            <div class="fw-bold">{{ $admin->profile->country }}</div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
