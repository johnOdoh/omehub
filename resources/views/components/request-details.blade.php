<div class="container-fluid p-0">
    <div class="card">
        <div class="card-header pb-0">
            @if ($hasButton)
                <div class="card-actions float-end">
                    <div class="dropdown position-relative">
                        <a href="#" data-bs-display="static" style="margin-left: 10px" wire:click='closeRequest()'>
                            <i class="align-middle fa fa-times"></i>
                        </a>
                    </div>
                </div>
            @endif
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
            @if ($hasButton)
                <div class="float-end mt-2">
                    <button type="button" class="btn btn-sm btn-primary" wire:click='toggleQuote()'>Submit Quote</button>
                </div>
            @endif
        </div>
    </div>
</div>
