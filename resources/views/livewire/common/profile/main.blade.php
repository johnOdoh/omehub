<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Profile</h1>
        </div>
        @if (session('success')) <span x-show="notify('Document Submitted')"></span> @endif
        @if ($hasProfile && !$user->profile->documents)
        <div class="col-auto ms-auto text-end mt-n1">
            @if ($user->verification_payment)
            <a class="btn btn-outline-primary" href="{{ route('user.upload-document') }}" wire:navigate>Upload Documents</a>
            @else
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#uploadDocuments">Upload Documents</button>
            @endif
        </div>
        @endif
    </div>
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-message">
                <div>{{ session('error') }}</div>
            </div>
        </div>
    @endif
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
                            <x-profile-info :$user />
                        @endif
                    @endif
                    @if ($showCreateProfile)
                        <hr class="my-0">
                        <livewire:common.profile.create-profile :$user />
                    @endif
                @else
                    <livewire:common.profile.edit-profile :$user />
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
    <div class="modal fade" id="uploadDocuments" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Important Notice!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <p class="mb-0">You need to make a one-time payment of ${{ $isPersonal ? '1' : '5' }} before you can upload your documents for verification.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" onclick="makePayment()">Proceed to Payment</a>
                </div>
            </div>
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
    @if ($uploaded == 1)
        @script
            <script>
                $wire.dispatch('uploaded');
            </script>
        @endscript
    @endif
    {{-- // Livewire.on('reRender', () => {
    //     const script = document.createElement('script');
    //     script.src = '{{ asset('assets/js/countries.js') }}';
    //     script.type = 'text/javascript';
    //     script.id = 'country-script';
    //     document.body.appendChild(script);

    //     script.onload = () => {
    //         populateCountries("country", "state")
    //     };
    // }); --}}
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:100000;" id="loadingOverlay" class="d-none">
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @if ($hasProfile)
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <script>
            function makePayment() {
                document.querySelector('#loadingOverlay').classList.remove('d-none');
                FlutterwaveCheckout({
                    public_key: '{{ env('FLUTTERWAVE_PUBLIC_KEY') }}',
                    tx_ref: '{{ uniqid('ome_', true) }}',
                    amount: {{ $isPersonal ? 1.00 : 5.00 }},
                    currency: 'USD',
                    payment_options: 'card',
                    redirect_url: '{{ route('payment.verification') }}',
                    customer: {
                        email: '{{ $user->email }}',
                        name: '{{ $user->name }}',
                    },
                    customizations: {
                        title: '{{ config('app.name') }}',
                        description: 'One time payment for document verification',
                        logo: '{{ asset('assets/img/favicon.png') }}',
                    },
                });
            }
        </script>
    @endif
</div>
