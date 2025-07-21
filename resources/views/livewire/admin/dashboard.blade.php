<div>
    <h1 class="h3 mb-3"><i class="fa fa-sun"></i> Good Day, {{ $user->firstname() }}</h1>
    <hr>
    <div class="row">
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">No of Users</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $usersCount }}</h1>
                    <div class="float-end">
                        {{-- <a href="{{ route('logistics.quotes-sent') }}" wire:navigate>My Quotes</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">No of Shippers</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-boxes"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $shippersCount }}</h1>
                    <div class="float-end">
                        {{-- <a href="{{ route('logistics.quote-requests') }}" wire:navigate>See Requests</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">No of Logistic Providers</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-ship"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $insuranceProvidersCount }}</h1>
                    <div class="float-end">
                        {{-- <a href="{{ route('logistics.shipments') }}" wire:navigate>My Shipments</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">No of Insurance Providers</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa fa-shield"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $logisticsProvidersCount }}</h1>
                    <div class="float-end">
                        {{-- <a href="{{ route('logistics.shipments') }}" wire:navigate>My Shipments</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
