<div>
    <h1 class="h3 mb-3"><i class="fa fa-sun"></i> Good Day, {{ $user->firstname() }}</h1>
    <hr>
    @if (!$user->profile()->exists())
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>You are yet to complete your profile. <a href="{{ route('user.profile') }}" wire:navigate>Click here</a> to complete your profile to be able to enjoy our services.</div>
            </div>
        </div>
    @elseif (!$user->profile->is_verified)
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>Your documents are under review by our team. You will be notified as soon as your documents are approved.</div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Quotes Submitted</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $quotesCount }}</h1>
                    <div class="float-end">
                        <a href="{{ route('logistics.quotes-sent') }}" wire:navigate>My Quotes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Active Quote Requests</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $requestsCount }}</h1>
                    <div class="float-end">
                        <a href="{{ route('logistics.quote-requests') }}" wire:navigate>See Requests</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Active Covers</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-ship"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $activeCoversCount }}</h1>
                    <div class="float-end">
                        {{-- <a href="{{ route('logistics.shipments') }}" wire:navigate>My Shipments</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
