<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Quotes Sent</h1>
    </div>
    @if (session(key: 'updated')) <span x-show="notify('Quote Updated')"></span> @endif
    @if (session(key: 'deleted')) <span x-show="notify('Quote Deleted')"></span> @endif
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
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Request Details</h5>
                    </div>
                    <hr class="mb-0">
                    @php
                        $dimension = explode(',', $request->dimensions);
                    @endphp
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-map-marker fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Pickup</div>
                                    <div class="fw-bold">{{ $request->pickup }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-location-arrow fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Destination</div>
                                    <div class="fw-bold">{{ $request->destination }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-shipping-fast fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Freight Type</div>
                                    <div class="fw-bold">{{ $request->freight_type }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-boxes fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Cargo Type</div>
                                    <div class="fw-bold">{{ $request->cargo_type }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-box fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Container Type</div>
                                    <div class="fw-bold">{{ $request->container_type }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-sort-numeric-up fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Quantity</div>
                                    <div class="fw-bold">{{ $dimension[0] }}</div>
                                </div>
                            </li>
                            @if ($request->container_type == 'FCL')
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-box fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Container Type</div>
                                        <div class="fw-bold">{{ $dimension[1] }}</div>
                                    </div>
                                </li>
                            @else
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-weight-hanging fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Weight</div>
                                        <div class="fw-bold">{{ $dimension[1] }}KG</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-cube fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Volume</div>
                                        <div class="fw-bold">{{ $dimension[2] }}CBM</div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
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
                                <label class="form-label fw-bold">Freight Charges(USD)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-dollar me-1"></i></span>
                                    <input type="number" class="form-control" placeholder="Freight Cost" step="0.01" required wire:model="cost">
                                </div>
                                @error('cost')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="form-label fw-bold">Custom Clearance Charges(USD)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-dollar me-1"></i></span>
                                    <input type="number" class="form-control" placeholder="Custom Charges" step="0.01" required wire:model="custom">
                                </div>
                                @error('custom')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="form-label fw-bold">Date of Departure</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-calendar me-1"></i></span>
                                    <input type="date" class="form-control" required wire:model="date">
                                </div>
                                @error('date')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="form-label fw-bold">Estimated Freight Duration</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-hourglass-half me-1"></i></span>
                                    <input type="number" class="form-control" placeholder="Duration" min="1" required wire:model="duration">
                                    <span class="input-group-text">days</span>
                                </div>
                                @error('duration')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="text-end my-4">
                                <button type="button" class="btn btn-outline-primary me-1" wire:click="close_request()" wire:loading.remove>Cancel</button>
                                <button type="submit" class="btn btn-primary" wire:dirty.class.remove="disabled" wire:loading.remove>Update Quote</button>
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
