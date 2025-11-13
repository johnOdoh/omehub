<div class="container-fluid p-0">
    <div class="mb-2">
        <h1 class="h3 d-inline align-middle">User Information</h1>
    </div>
    <p class="fw-bold"><a href="{{ route('admin.users') }}" wire:navigate class="text-decoration-none">< Back</a></p>
    @if (session('message')) <span x-show="notify('{{ session('message') }}')"></span> @endif
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">KYC Status <span class="badge bg-{{ $user->profile->is_verified ? 'success' : 'warning' }}">{{ $user->profile->is_verified ? 'Verified' : 'Pending' }}</span></h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                            </div>
                            @if ($user->profile->documents)
                                @if ($user->role == 'Shipper' && $user->profile->account_type == 'Personal')
                                    <div class="mt-3 d-flex justify-content-between">
                                        <p class="text-muted">Front Page</p>
                                        <a href="{{ asset('storage/' . $user->profile->documents['front']) }}" class="px-3" target="_blank">View</a>
                                    </div>
                                    @if ($user->profile->documents['back'])
                                        <div class="d-flex justify-content-between">
                                            <p class="text-muted">Back</p>
                                            <a href="{{ asset('storage/' . $user->profile->documents['back']) }}" class="px-3" target="_blank">View</a>
                                        </div>
                                    @endif
                                    <div class="mt-2 d-flex justify-content-between">
                                        <p class="text-muted">Account Name</p>
                                        <span class="text-info">{{ $user->profile->documents['name'] }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted">Account Number</p>
                                        <span class="text-info">{{ $user->profile->documents['number'] }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted">Bank Name</p>
                                        <span class="text-info">{{ $user->profile->documents['bank'] }}</span>
                                    </div>
                                    <div class="text-end my-2">
                                        @if (!$user->profile->is_verified)
                                            <button type="button" class="btn btn-primary" wire:confirm='Are you sure you want to verify this user?' wire:click="verifyUser()">Approve</button>
                                        @endif
                                    </div>
                                @else
                                    <div class="mt-2 d-flex justify-content-between">
                                        <p class="text-muted">Account Name</p>
                                        <span class="text-info">{{ $user->profile->documents['name'] }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted">Account Number</p>
                                        <span class="text-info">{{ $user->profile->documents['number'] }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted">Bank Name</p>
                                        <span class="text-info">{{ $user->profile->documents['bank'] }}</span>
                                    </div>
                                    <div class="text-end my-1">
                                        <a href="{{ asset('storage/' . $user->profile->documents['document']) }}" class="px-3" target="_blank">View Document</a>
                                        @if (!$user->profile->is_verified)
                                            <button type="button" class="btn btn-primary" wire:confirm='Are you sure you want to verify this user?' wire:click="verifyUser()">Approve</button>
                                        @endif
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Date Registered</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="fw-bold">{{ $user->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
                @if ($user->role != 'Sustainability Partner' && $user->role != 'Financial Partner')
                    <div class="col-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Quotes {{ $user->role == 'Shipper' ? 'Requested' : 'Submitted' }}</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat">
                                            <i class="fa fa-lightbulb"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="fw-bold">{{ $stats['quotes'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">@if ($user->role == 'Shipper') Shipments @else Quotes Accepted @endif</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat">
                                            <i class="fa fa-ship"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="fw-bold">{{ $stats['shipments'] }}</p>
                            </div>
                        </div>
                    </div>
                @elseif ($user->role == 'Financial Partner')
                    <div class="col-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Funding Requests Received</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat">
                                            <i class="fa fa-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="my-1">{{ $stats['counts']->sum() }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Requests Pending</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-warning">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="my-1">{{ $stats['counts']['pending'] ?? 0 }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Requests Approved</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-success">
                                            <i class="fa fa-check-double"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="my-1">{{ $stats['counts']['approved'] ?? 0 }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Requests Rejected</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-danger">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="my-1">{{ $stats['counts']['rejected'] ?? 0 }}</h1>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="text-center">
                        <livewire:common.profile.profile-image-update :$user :allowEdit="false" />
                        <h5 class="fw-bold mt-2 mb-0">{{ $user->name }}</h5>
                        <div class="mb-2">{{ $user->email }}</div>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @if ($user->role == 'Shipper')
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-briefcase fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Account Type</div>
                                    <div class="fw-bold">{{ $user->profile->account_type }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-user fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">{{ $user->profile->account_type == 'Business' ? 'Business' : 'Full' }} Name</div>
                                    <div class="fw-bold">{{ $user->name }}</div>
                                </div>
                            </li>
                            @if ($user->profile->account_type == 'Business')
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-briefcase fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Business Type</div>
                                        <div class="fw-bold">{{ $user->profile->business_type }}</div>
                                    </div>
                                </li>
                            @endif
                        @endif
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-stamp fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Role</div>
                                <div class="fw-bold">{{ $user->role }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-key fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Registration Number</div>
                                <div class="fw-bold">{{ $user->profile->reg_no ?? 'N/A' }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-key fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">TAX ID Number</div>
                                <div class="fw-bold">{{ $user->profile->tin ?? 'N/A' }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-phone fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Phone Number</div>
                                <div class="fw-bold">{{ $user->profile->dial_code.' '.$user->profile->phone }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-map-pin fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Address</div>
                                <div class="fw-bold">{{ $user->profile->address }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-tag fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Zip</div>
                                <div class="fw-bold">{{ $user->profile->zip }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-home fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">City</div>
                                <div class="fw-bold">{{ $user->profile->city }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-globe fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Country</div>
                                <div class="fw-bold">{{ $user->profile->country }}</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
