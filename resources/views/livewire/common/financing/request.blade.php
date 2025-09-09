<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3">Request Trade Financing</h1>
    </div>
    @if (session('success')) <span x-show="notify('Financing Request Submitted')"></span> @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (!auth()->user()->profile()->exists())
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
                                <div>Your documents are under review by our team. You will be notified when soon when your documents are approved.</div>
                            </div>
                        </div>
                    @endif
                    <form wire:submit="create">
                        <div class="form-group">
                            <label class="form-label">Amount</label>
                            <input type="number" class="form-control" placeholder="Amount" aria-label="Amount" required wire:model="amount">
                            @error('amount')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label">Currency</label>
                            <select class="form-select" wire:model="currency" required>
                                <option value="">Select...</option>
                                <option value="USD">US Dollar (USD)</option>
                                <option value="EUR">Euro (EUR)</option>
                                <option value="GBP">British Pound (GBP)</option>
                                <option value="NGN">Nigerian Naira (NGN)</option>
                            </select>
                            @error('currency')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label">Reason for finance</label>
                            <textarea rows="2" class="form-control" placeholder="Reason for Financing" required wire:model="reason"></textarea>
                            @error('reason')
                                <div class="-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label">Request From</label>
                            <select class="form-select" wire:model="partner" required>
                                <option value="">Select...</option>
                                @foreach ($partners as $user)
                                    <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                @endforeach
                            </select>
                            @error('partner')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile?->is_verified) disabled @endif wire:loading.remove>Submit</button>
                                <button class="btn btn-primary px-5" wire:loading>
                                    <div class="spinner-border spinner-border-sm text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
