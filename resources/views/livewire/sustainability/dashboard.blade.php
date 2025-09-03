<div>
    <h1 class="h3 mb-3"><i class="fa fa-sun"></i> Good Day, {{ auth()->user()->firstname() }}</h1>
    <hr>
    @if (!auth()->user()->profile)
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>You are yet to complete your profile. <a href="{{ route('user.profile') }}" wire:navigate>Click here</a> to complete your profile to be able to enjoy our services.</div>
            </div>
        </div>
    @elseif (!auth()->user()->profile->is_verified)
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>Your documents are under review by our team. You will be notified as soon as your documents are approved.</div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-6 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Number of Carbon Offsets made</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-list"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ 5 }}</h1>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Total Amount Raised from Offsets</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat text-success">
                                <i class="fa fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ number_format(500, 2) }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
