<div class="container-fluid p-0">
    <div class="mb-2">
        <h1 class="h3 d-inline align-middle">User Information</h1>
    </div>
    <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="$parent.resetUser()" class="text-decoration-none">< Back</a></p>
    @if (session('message')) <span x-show="notify('{{ session('message') }}')"></span> @endif
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">KYC Status</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="fw-bold text-{{ $profile->is_verified ? 'success' : 'warning' }}">{{ $profile->is_verified ? 'Verified' : 'Not Verified' }}</p>
                            <div class="text-end my-1">
                                <a href="{{ asset('storage/' . $profile->document) }}" class="px-3" target="_blank">View Document</a>
                                @if (!$profile->is_verified)
                                    <button type="button" class="btn btn-primary" wire:confirm='Are you sure you want to verify this user?' wire:click="verifyUser()">Approve</button>
                                @endif
                            </div>
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
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="text-center">
                        <livewire:common.profile-image-update :$user :allowEdit="false" />
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
                                    <div class="fw-bold">{{ $user->shipper->account_type }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-user fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">{{ $user->shipper->account_type == 'Business' ? 'Business' : 'Full' }} Name</div>
                                    <div class="fw-bold">{{ $user->name }}</div>
                                </div>
                            </li>
                            @if ($user->shipper->account_type == 'Business')
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-briefcase fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Business Type</div>
                                        <div class="fw-bold">{{ $user->shipper->business_type }}</div>
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
                            <i class="fas fa-phone fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Phone Number</div>
                                <div class="fw-bold">{{ $profile->dial_code.' '.$profile->phone }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-map-pin fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Address</div>
                                <div class="fw-bold">{{ $profile->address }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-tag fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Zip</div>
                                <div class="fw-bold">{{ $profile->zip }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-home fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">City</div>
                                <div class="fw-bold">{{ $profile->city }}</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-globe fa-fw me-1"></i>
                            <div>
                                <div class="text-muted small">Country</div>
                                <div class="fw-bold">{{ $profile->country }}</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
