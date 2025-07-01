<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Quote Requests</h1>
    </div>
    @if (session('submitted')) <span x-show="notify('Quote Submitted')"></span> @endif
    @if (!$show_submit_quote)
        <div class="row">
            <div class="col-xl-{{ $request ? '7' : '12' }}">
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
            @if ($request)
                <div class="col-xl-5" x-ref="request" x-on:request-changed.window="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                    <div class="card" x-init="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                        <div class="card-header pb-0">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-display="static" style="margin-left: 10px" wire:click='close_request()'>
                                        <i class="align-middle fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Request Details</h5>
                        </div>
                        <hr class="mb-0">
                        @php
                            $items = explode(';', $request->dimensions);
                        @endphp
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fa fa-map-marker fa-fw me-1"></i>
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
                                    <i class="fas fa-ship fa-fw me-1"></i>
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
                                    <i class="fas fa-code fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">HS/Tariff Code</div>
                                        <div class="fw-bold">{{ $request->hs_code }}</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-handshake fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Incoterm</div>
                                        <div class="fw-bold">{{ $request->incoterm }}</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-money-bill fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Currency</div>
                                        <div class="fw-bold">{{ $request->currency }}</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-box fa-fw me-1"></i>
                                    <div>
                                        <div class="text-muted small">Container Type</div>
                                        <div class="fw-bold">{{ $request->container_type }}</div>
                                    </div>
                                </li>
                                <hs>Item(s)</hs>
                                <hr class="my-1">
                                <li class="d-flex align-items-center gap-2 mb-2 w-100">
                                    <i class="fas fa-sort-numeric-up fa-fw me-1"></i>
                                    @if ($request->container_type == 'LCL')
                                        <table class="table table-responsive table-striped table-sm mb-0 w-100">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Qty</th>
                                                    <th>Weight(KG)</th>
                                                    <th>Volume(CBM)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    @php $dimension = explode(',', $item); @endphp
                                                    <tr>
                                                        <td class="text-muted">{{ $loop->iteration }}</td>
                                                        <td class="text-muted">{{ $dimension[0] }}</td>
                                                        <td class="text-muted">{{ $dimension[1] }}</td>
                                                        <td class="text-muted">{{ $dimension[2] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <table class="table table-responsive table-striped table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Qty</th>
                                                    <th>Container Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    @php
                                                        $dimension = explode(',', $item);
                                                    @endphp
                                                    <tr>
                                                        <td class="text-muted">{{ $loop->iteration }}</td>
                                                        <td class="text-muted">{{ $dimension[0] }}</td>
                                                        <td class="text-muted">{{ $dimension[1] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </li>
                            </ul>
                            <div class="float-end mt-2">
                                <button type="button" class="btn btn-sm btn-primary" wire:click='toggle_quote()'>Submit Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @else
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Request Details</h5>
                    </div>
                    <hr class="mb-0">
                    @php
                        $items = explode(';', $request->dimensions);
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
                                <i class="fas fa-ship fa-fw me-1"></i>
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
                                <i class="fas fa-code fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">HS/Tariff Code</div>
                                    <div class="fw-bold">{{ $request->hs_code }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-handshake fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Incoterm</div>
                                    <div class="fw-bold">{{ $request->incoterm }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-money-bill fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Currency</div>
                                    <div class="fw-bold">{{ $request->currency }}</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-box fa-fw me-1"></i>
                                <div>
                                    <div class="text-muted small">Container Type</div>
                                    <div class="fw-bold">{{ $request->container_type }}</div>
                                </div>
                            </li>
                            <hs>Item(s)</hs>
                            <hr class="my-1">
                            <li class="d-flex align-items-center gap-2 mb-2 w-100">
                                <i class="fas fa-sort-numeric-up fa-fw me-1"></i>
                                @if ($request->container_type == 'LCL')
                                    <table class="table table-responsive table-striped table-sm mb-0 w-100">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Qty</th>
                                                <th>Weight(KG)</th>
                                                <th>Volume(CBM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                @php $dimension = explode(',', $item); @endphp
                                                <tr>
                                                    <td class="text-muted">{{ $loop->iteration }}</td>
                                                    <td class="text-muted">{{ $dimension[0] }}</td>
                                                    <td class="text-muted">{{ $dimension[1] }}</td>
                                                    <td class="text-muted">{{ $dimension[2] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <table class="table table-responsive table-striped table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Qty</th>
                                                <th>Container Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                @php
                                                    $dimension = explode(',', $item);
                                                @endphp
                                                <tr>
                                                    <td class="text-muted">{{ $loop->iteration }}</td>
                                                    <td class="text-muted">{{ $dimension[0] }}</td>
                                                    <td class="text-muted">{{ $dimension[1] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
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
                                <button type="button" class="btn btn-outline-primary me-1" wire:click="toggle_quote()" wire:loading.remove>Cancel</button>
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
