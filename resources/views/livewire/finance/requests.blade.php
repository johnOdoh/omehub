<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Financing Requests</h1>
        </div>
    </div>
    @if (session('success')) <span x-show="notify('{{ session('success') }}')"></span> @endif
    <div class="row">
        <div class="col-lg-{{ $user_info || $request_details ? '7' : '12' }}">
            <div class="card">
                <div class="card-header px-4 pt-4">
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                <i class="fa fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("All")' href="#">All</a>
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("pending")' href="#">Pending</a>
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("approved")' href="#">Approved</a>
                                <a class="dropdown-item" wire:click.prevent='changeCurrent("rejected")' href="#">Rejected</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0 text-capitalize">{{ $current }} Requests</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Amount Requested</th>
                                    <th>Status</th>
                                    <th>Customer Approval</th>
                                    <th>Requested On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($requests as $request)
                                    <tr>
                                        <td>{{ $requests->firstItem() + $loop->index }}</td>
                                        <td>{{ $request->currency.' '.number_format($request->amount, 2) }}</td>
                                        <td><span class="badge bg-{{ $request->status == 'pending' ? 'warning' : ($request->status == 'approved' ? 'success' : 'danger') }} text-capitalize">{{ $request->status }}</span></td>
                                        <td>
                                            @if($request->status == 'approved')<span class="badge bg-{{ $request->user_status == 'pending' ? 'warning' : ($request->user_status == 'accepted' ? 'success' : 'danger') }} text-capitalize">{{ $request->user_status }}</span>@else - @endif
                                        </td>
                                        <td>{{ $request->created_at->format('d M, Y') }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-primary btn-sm" wire:click="getUser({{ $request->user_id }})">View User</button>
                                                <button class="btn btn-info btn-sm" wire:click="getRequest({{ $request->id }})">View Request</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="6"><h5>No Financing Requests Yet</h5></td></tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $requests->links() }}
                    </div>
                </div>
            </div>
        </div>
        @if ($user_info)
            <div class="col-lg-5" x-ref="user" x-on:user-changed.window="$refs.user.scrollIntoView({ behaviour: 'smooth' })">
                <div x-init="$refs.user.scrollIntoView({ behaviour: 'smooth' })">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-actions float-end">
                                <div class="d-inline">
                                    <a href="#" data-bs-display="static" style="margin-left: 10px" wire:click='close'>
                                        <i class="align-middle fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">User Details</h5>
                        </div>
                        <hr class="mb-0">
                        <x-profile-info :user="$user_info" />
                    </div>
                </div>
            </div>
        @elseif ($request_details)
            <div class="col-lg-5" x-ref="request" x-on:admin-changed.window="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                <div x-init="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-actions float-end">
                                <div class="d-inline">
                                    <a href="#" data-bs-display="static" style="margin-left: 10px" wire:click='close'>
                                        <i class="align-middle fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Request Details</h5>
                        </div>
                        <hr class="mb-0">
                        <div class="card-body">
                            <x-financial-request-details :request="$request_details" />
                            @if ($request_details->status == 'pending')
                                @if(!$accepting)
                                    <div class="text-end my-3">
                                        <button class="btn btn-primary me-1" wire:click="$toggle('accepting')">Accept</button>
                                        <button class="btn btn-danger" wire:click="decline" wire:confirm="Are you sure you want to decline this request?">Decline</button>
                                    </div>
                                @else
                                    <h5 class="card-title">Complete the financing Details</h5>
                                    <form wire:submit="accept" wire:confirm="Are you sure you want to accept this request with the entered details?">
                                        <div class="form-group mb-3">
                                            <input type="number" class="form-control" wire:model="interest" placeholder="Interest Rate per Month (%)" min="0" step="0.01" required>
                                            @error('interest')
                                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="number" class="form-control" min="1" wire:model="duration" placeholder="Number of months due" required>
                                            @error('duration')
                                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                            @enderror
                                        </div>
                                        <div class="text-end my-3">
                                            <button type="button" class="btn btn-outline-primary me-1" wire:click="$toggle('accepting')" wire:loading.remove>Cancel</button>
                                            <button type="submit" class="btn btn-primary" wire:loading.remove>Submit</button>
                                            <button class="btn btn-primary px-5" wire:loading>
                                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            @endif
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
