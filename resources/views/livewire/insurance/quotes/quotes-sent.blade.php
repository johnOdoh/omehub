<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Quotes Sent</h1>
    </div>
    @if (session('updated')) <span x-show="notify('Quote Updated')"></span> @endif
    @if (session('deleted')) <span x-show="notify('Quote Deleted')"></span> @endif
    @if (!$request)
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Requests</h5>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Freight Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($requests as $quote_request)
                                        <tr>
                                            <td>{{ $requests->firstItem() + $loop->index }}</td>
                                            <td>{{ $quote_request->pickup }}</td>
                                            <td>{{ $quote_request->destination }}</td>
                                            <td>{{ $quote_request->freight_type }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm" wire:click="view_request({{ $quote_request->id }})">View</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="5"><h5>No Requests Yet</h5></td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $requests->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="close_request" class="text-decoration-none">< Back</a></p>
        <div class="row">
            <div class="col-xl-6">
                <x-request-details :$request :has-button="false" />
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-actions float-end">
                            <button class="btn btn-primary btn-sm" wire:click="deleteQuote()" wire:confirm="Are you sure you want to delete this quote?">Delete Quote</button>
                        </div>
                        <h5 class="card-title mb-0">Quote Details</h5>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <form wire:submit="updateQuote" class="p-0">
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
                                <label class="form-label fw-bold">Coverage Details <i class="small">*{pdf, doc or docx}</i>
                                    <span class="small">Only upload a new file if you want to change the <a href="{{ asset('storage/'.$fileUrl) }}" target="_blank">current one</a></span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-file"></i></span>
                                    <input type="file" class="form-control" wire:model="file">
                                </div>
                                @error('file')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="text-end my-4">
                                <button type="button" class="btn btn-outline-primary me-1" wire:click="close_request()" wire:loading.remove>Cancel</button>
                                <button type="submit" class="btn btn-primary" wire:loading.remove>Update Quote</button>
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
