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
                                        <th>Expires In</th>
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
                                            @if($quote_request->expires_at->isPast())
                                                <td><span class="badge bg-danger">Expired</span></td>
                                            @else
                                                <td class="fw-bold text-info">{{ $quote_request->expires_at->diffAsCarbonInterval()->forHumans() }}</td>
                                            @endif
                                            <td>{{ $quote_request->quotes->count() }}</td>
                                            <td class="d-flex gap-2">
                                                <button class="btn btn-info btn-sm" wire:click="viewRequest({{ $quote_request->id }})">View</button>
                                                <button class="btn btn-danger btn-sm" wire:confirm="Are you sure you want to delete this request?" wire:click="deleteRequest({{ $quote_request->id }})">Delete</button>
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
        <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="closeRequest" class="text-decoration-none">< Back</a></p>
        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="d-flex flex-wrap align-items-center gap-2 text-dark fs-6 flex-grow-1">
                <!-- Origin -->
                <div class="d-flex align-items-center">
                    <img src="https://flagcdn.com/{{ strtolower($codes[0]->code) }}.svg" width="20" class="me-1" alt="US Flag">
                    <span>{{ $request->pickup }}</span>
                </div>
                <!-- Arrow -->
                <span class="text-secondary mx-2">&gt;</span>
                <!-- Destination -->
                <div class="d-flex align-items-center">
                    <img src="https://flagcdn.com/{{ strtolower($codes[1]->code) }}.svg" width="20" class="me-1" alt="US Flag">
                    <span>{{ $request->destination }}</span>
                </div>
                <span class="badge rounded-pill border border-secondary text-secondary fw-normal px-3 mx-2 text-uppercase">{{ $request->freight_type }}</span>

                <span class="badge rounded-pill border border-secondary text-secondary fw-normal px-3 mx-2 text-uppercase">{{ $request->container_type }}</span>
                @foreach ($dimensions as $dimension)
                    @php $dimension = explode(',', $dimension) @endphp
                    <span class="badge rounded-pill border border-secondary text-secondary fw-normal px-3 text-uppercase">
                        @if($request->container_type == 'FCL')
                            {{ $dimension[0] }}pc, {{ $dimension[1] }}
                        @else
                            {{ $dimension[0] }}pc, {{ $dimension[1] }}KG, {{ $dimension[2] }}CBM
                        @endif
                    </span>
                @endforeach
            </div>
        </div>
        <hr>
        @if ($quote_id)
            <livewire:shipper.quotes.book :quote="$quote_id">
        @else
            <livewire:shipper.quotes.quote-list :$request>
        @endif
    @endif

    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
