<div>
    <h1 class="h3 mb-3"><i class="fa fa-sun"></i> Good Day, {{ $user->firstname() }}</h1>
    <hr>
    <h1 class="h4 mb-3">Get the best prices for all your shipping needs</h1>
    @if (!$user->shipper)
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>You are yet to complete your profile. <a href="{{ route('shipper.profile') }}" wire:navigate>Click here</a> to complete your profile to be able to enjoy our services.</div>
            </div>
        </div>
    @elseif (!$user->shipper->is_verified)
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>Your documents are under review by our team. You will be notified when soon when your documents are approved.</div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-4 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Container Shipping</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa-solid fa-ship align-middle"></i>
                            </div>
                        </div>
                    </div>
                    <p class="my-2">Swift and dependable international shipping for a full or half container.</p>
                    <div class="float-end">
                        <a href="{{ route('shipper.get-quotes') }}" wire:navigate>Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Boxes & Bags</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa-solid fa-boxes align-middle"></i>
                            </div>
                        </div>
                    </div>
                    <p class="my-2">Cost-effect solution for shipping boxes and loose cargo internationally.</p>
                    <div class="float-end">
                        <a href="{{ route('shipper.get-quotes') }}" wire:navigate>Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Air Freight</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat">
                                <i class="fa-solid fa-plane-departure align-middle"></i>
                            </div>
                        </div>
                    </div>
                    <p class="my-2">Get your cargo shipped Faster with our secure and reliable air freight services.</p>
                    <div class="float-end">
                        <a href="{{ route('shipper.get-quotes') }}" wire:navigate>Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 col-md-5 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <h5 class="h4 mb-3">Saved Quotes</h5>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <h5 class="h4 mb-3">Volume/CBM Calculator</h5>
                    <hr>
                    <div class="d-flex flex-wrap align-items-end gap-2 rounded">
                        <div class="col-1-5">
                            <label class="form-label fw-bold small mb-1">Qty</label>
                            <input type="number" class="form-control no-spinner" placeholder="0" wire:model="qty" wire:keyup="calc">
                        </div>
                        <div class="col-1-5">
                            <label class="form-label small mb-1">Length</label>
                            <input type="number" class="form-control no-spinner" placeholder="0" wire:model="length" wire:keyup="calc">
                        </div>
                        <div class="col-1-5">
                            <label class="form-label small mb-1">Width</label>
                            <input type="number" class="form-control no-spinner" placeholder="0" wire:model="width" wire:keyup="calc">
                        </div>
                        <div class="col-1-5">
                            <label class="form-label small mb-1">Height</label>
                            <input type="number" class="form-control no-spinner" placeholder="0" wire:model="height" wire:keyup="calc">
                        </div>
                        <div class="col-2-5">
                            <label class="form-label small mb-1">Unit</label>
                            <select class="form-select" wire:model="unit" wire:change="calc">
                                <option value="cm">CMs</option>
                                <option value="in">INs</option>
                            </select>
                        </div>
                        <div class="text-center col-0-5 my-2">=</div>
                        <div class="col-2-5">
                            <label class="form-label small mb-1">Total(CBM)</label>
                            <input type="text" class="form-control no-spinner" title="{{ $total }}" readonly wire:model="total">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
