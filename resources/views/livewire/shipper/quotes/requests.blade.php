<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Quote Requests</h1>
    </div>
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
                                        <th>No of Quotes</th>
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
                                            <td>{{ $quote_request->quotes->count() }}</td>
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
        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="d-flex flex-wrap align-items-center gap-2 text-dark fs-6 flex-grow-1">
                <!-- Origin -->
                <div class="d-flex align-items-center">
                    {{-- <img src="https://flagcdn.com/us.svg" width="20" class="me-1" alt="US Flag"> --}}
                    <span>{{ $request->pickup }}</span>
                </div>
                <!-- Arrow -->
                <span class="text-secondary mx-2">&gt;</span>
                <!-- Destination -->
                <div class="d-flex align-items-center">
                    {{-- <img src="https://flagcdn.com/us.svg" width="20" class="me-1" alt="US Flag"> --}}
                    <span>{{ $request->destination }}</span>
                </div>
                <span class="badge rounded-pill border border-secondary text-secondary fw-normal px-3 mx-2 text-uppercase">{{ $request->freight_type }}</span>

                <span class="badge rounded-pill border border-secondary text-secondary fw-normal px-3 mx-2 text-uppercase">{{ $request->container_type }}</span>

                <span class="badge rounded-pill border border-secondary text-secondary fw-normal px-3 text-uppercase">
                    @if($request->container_type == 'FCL')
                        {{ $dimension[0] }}pc, {{ $dimension[1] }}
                    @else
                        {{ $dimension[0] }}pc, {{ $dimension[1] }}KG, {{ $dimension[2] }}CBM
                    @endif
                </span>
            </div>
        </div>
        <hr>
        @if ($request->quotes->count() > 0)
            <div class="alert alert-info" role="alert">
                <div class="alert-message d-flex">
                    <strong class="me-2">Tip:</strong>
                    <div>You can select insurance and other additional services in the next step. Select a rate to proceed and continue with your booking.</div>
                </div>
            </div>
        @endif
        <div class="row">
            @forelse ($request->quotes as $quote)
                <div class="col-md-6 col-12">
                    <div class="card mb-4 p-0 rounded-4">
                        <div class="card-body">
                            <h5 class="text-center py-1 fw-bold">{{ $quote->user->name }}</h5>
                            <hr>
                            <div class="d-flex justify-content-around align-items-center pb-3">
                                <div><strong>{{ $request->pickup }}</strong></div>
                                <div><strong>&gt;</strong></div>
                                <div><strong>{{ $request->destination }}</strong></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 border-end py-2">
                                    <p class="mb-1"><strong>Freight Charges</strong></p>
                                    <div class="text-muted">USD {{ number_format($quote->cost, 2) }}</div>
                                </div>
                                <div class="col-md-6 col-12 py-2">
                                    <p class="mb-1"><strong>Custom Clearance Charge</strong></p>
                                    <div class="text-muted">USD {{ number_format($quote->custom, 2) }}</div>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 border-end py-2">
                                    <p class="mb-1"><strong>Estimated transit time</strong></p>
                                    <div class="text-muted">{{ $quote->duration }} days</div>
                                </div>
                                <div class="col-md-6 col-12 py-2">
                                    <p class="mb-1"><strong>Departure Date</strong></p>
                                    <div class="text-muted">{{ $quote->departure_date->format('M d, Y') }}</div>
                                </div>
                                <hr>
                            </div>
                            <div class="text-end my-2">
                                {{-- <a href="" class="px-3">Show details and charges</a> --}}
                                <button type="button" class="btn btn-primary">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center vh-50 text-center">
                        <div>
                            <i class="fas fa-folder-open fa-5x mb-4 text-warning"></i> <!-- Icon replacing image -->
                            <h4 class="fw-bold">No Quotes Yet.</h4>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    @endif

    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
