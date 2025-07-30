<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Quote Requests</h1>
    </div>
    @if (session('submitted')) <span x-show="notify('Quote Submitted')"></span> @endif
    @if (session('expired')) <span x-show="error('The Quote Request has expired!')"></span> @endif
    @if (!$show_submit_quote)
        @if (!auth()->user()->insurance_provider || !auth()->user()->insurance_provider->is_verified)
            <div class="alert alert-warning" role="alert">
                <div class="alert-message d-flex">
                    <strong class="me-2"><i class="fa fa-warning"></i></strong>
                    <div>You will not be able to see quote requests until your profile is completed and your documents are verified</div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-{{ $request ? '7' : '12' }}">
                    <livewire:common.quote.request-list />
                </div>
                @if ($request)
                    <div class="col-lg-5" x-ref="request" x-on:request-changed.window="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                        <div x-init="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                            <x-request-details :$request :has-button="true" />
                        </div>
                    </div>
                @endif
            </div>
        @endif
    @else
        <div class="row">
            <div class="col-xl-6">
                <x-request-details :$request :has-button="false" />
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Submit Quote</h5>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <form wire:submit="submitQuote" class="p-0">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Insurance Cost</label>
                                <div class="input-group">
                                    <span class="input-group-text">{{ $request->currency }}</span>
                                    <input type="number" class="form-control" placeholder="Coverage Cost" step="0.01" required wire:model="charge">
                                </div>
                                @error('charge')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="form-label fw-bold">Maximum Possible Payout</label>
                                <div class="input-group">
                                    <span class="input-group-text">{{ $request->currency }}</span>
                                    <input type="number" class="form-control" placeholder="Max Possible Payout" step="0.01" required wire:model="max">
                                </div>
                                @error('max')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="form-label fw-bold">Coverage Details <i class="small">*{pdf, doc or docx}</i></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-file"></i></span>
                                    <input type="file" class="form-control" required wire:model="file">
                                </div>
                                @error('file')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="text-end my-3">
                                <button type="button" class="btn btn-outline-primary me-1" wire:click="toggleQuote()" wire:loading.remove>Cancel</button>
                                <button type="submit" class="btn btn-primary" wire:loading.remove>Submit</button>
                                <button class="btn btn-primary px-5" wire:loading>
                                    <div class="spinner-border spinner-border-sm text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
