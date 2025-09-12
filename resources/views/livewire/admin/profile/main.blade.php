<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Profile</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                @if (!$showEditProfile && $hasProfile)
                    <div class="card-header pb-0">
                        <div class="float-end">
                            <a href="#" wire:click.prevent="editProfile()">Edit</a>
                        </div>
                    </div>
                @endif
                <div class="card-body text-center">
                    <div class="text-center">
                        <livewire:common.profile.profile-image-update :$user />
                        <h5 class="fw-bold mt-2 mb-0">{{ $user->name }}</h5>
                        <div class="mb-2">{{ $user->email }}</div>
                    </div>
                </div>
                @if (!$showEditProfile)
                    @if ($showProfile)
                        @if (!$hasProfile)
                            <div class="text-center pb-3">
                                <button type="button" class="btn btn-primary" x-on:click="$wire.createProfile()">Create Profile</button>
                            </div>
                        @else
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="fas fa-user fa-fw me-1"></i>
                                        <div>
                                            <div class="text-muted small">Name</div>
                                            <div class="fw-bold">{{ $user->name }}</div>
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
                        @endif
                    @endif
                    @if ($showCreateProfile)
                        <hr class="my-0">
                        <livewire:admin.profile.create-profile :$user />
                    @endif
                @else
                    <livewire:admin.profile.edit-profile :$user />
                @endif
            </div>
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <livewire:common.profile.password-update />
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @script
        <script>
            window.addEventListener('load-countries-plugin', () => {
                loadCountryScript(); // same function from above
            });
            function loadCountryScript() {
                // if (!document.getElementById('country-script')) {
                    const script = document.createElement('script');
                    script.src = '{{ asset('portal-assets/js/countries.js') }}';
                    script.type = 'text/javascript';
                    script.id = 'country-script';
                    document.body.appendChild(script);

                    script.onload = () => {
                        populateCountries("country", "state")
                    };
                // }
            }
            </script>
    @endscript
</div>
