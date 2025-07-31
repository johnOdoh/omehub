<div>
    @if ($request->quotes->count() > 0)
        <div class="alert alert-warning" role="alert">
            <div class="alert-message d-flex">
                <strong class="me-2">Tip:</strong>
                <div>You can select other additional services in the next step. Select a rate to proceed and continue with your booking.</div>
            </div>
        </div>
    @endif
    <div class="row">
        @forelse ($request->quotes as $quote)
            <div class="col-md-6 col-12">
                <div class="card mb-4 p-0 rounded-4">
                    <div class="card-body">
                        <h3 class="text-center py-1 fw-bold">
                            <img src="{{ asset('storage/'.$quote->user->profile()->logo) ?? '' }}" alt="" width="100" height="50" class="me-2">{{ $quote->user->name }}
                        </h3>
                        <hr class="mb-0">
                        {{-- <div class="d-flex justify-content-around align-items-center">
                            <div><strong>{{ $request->pickup }}</strong></div>
                            <div><strong>&gt;</strong></div>
                            <div><strong>{{ $request->destination }}</strong></div>
                        </div>
                        <hr> --}}
                        <div class="row align-items-center">
                            <div class="col-6 border-end pe-0">
                                <div>
                                    <p class="mb-1"><strong>Estimated transit time</strong></p>
                                    <div class="text-primary">{{ $quote->duration }} days</div>
                                </div>
                                <hr>
                                <div>
                                    <p class="mb-1"><strong>Departure Date</strong></p>
                                    <div class="text-primary">{{ $quote->departure_date->format('M d, Y') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <p class="mb-1"><strong>Total Charge</strong></p>
                                    <div class="text-primary">{{ $request->currency }} {{ number_format($quote->custom+$quote->cost, 2) }}</div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        {{-- <div class="row">
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
                        </div> --}}
                        <div class="text-end my-2">
                            <a href="#" class="px-3" @click.prevent="$dispatch('loadJs', { 'cost': {{ $quote->cost }}, 'custom': {{ $quote->custom }} })">Show details and charges</a>
                            <button type="button" class="btn btn-primary" wire:click="$parent.selectQuote({{ $quote->id }})">Select</button>
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
    <a href="#" class="px-3" id="canvas" data-bs-toggle="offcanvas" data-bs-target="#moreDetails" aria-controls="moreDetails" style="visibility: hidden"></a>
    <div class="offcanvas offcanvas-end p-0" tabindex="-1" id="moreDetails" aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header bg-light">
            <h3 id="offcanvasLeftLabel" class="text-primary text-uppercase fw-bold">Quote Summary</h3>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mb-0 pb-0">
            <div class="container py-0">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between pb-4">
                            <strong class="text-uppercase text-primary">Pickup Charges</strong>
                            <span>Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Pickup charges covered."></i></span>
                        </div>
                        <div class="d-flex justify-content-between pb-4">
                            <strong class="text-uppercase text-primary">Origin Charges</strong>
                            <span>Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Origin handling fees covered."></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between pb-4">
                            <strong class="text-uppercase text-primary">Freight Charges</strong>
                            <span class="text-primary fw-bold">{{ $request->currency }} {{ number_format($current_quote['cost'], 2) }}</span>
                        </div>
                        {{-- <div class="ps-2 mt-2">
                            <div class="d-flex justify-content-between">
                                <div>{{ $request->freight_type }}</div>
                                <div>
                                    <strong>{{ number_format($quote->cost, 2) }}</strong><br />
                                    @if ($quote->container_type === 'FCL')
                                        <small class="text-muted">
                                            ({{ $request->currency }} {{ number_format($quote->cost/$quote->weight, 2) }}/container)
                                        </small>
                                    @else
                                        <small class="text-muted">
                                            ({{ $request->currency }} {{ number_format($quote->cost/$dimension[1], 2) }}/KG)
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                        {{-- <p class="mt-2 small text-muted fst-italic">
                        Subjected to EEI Filing for HS Codes over $2500.00. Cost: $20.00 - 1st HS Code over $2500.00 /
                        $10.00 for each additional HS Code over $2500.00. Customs Clearance Export included.
                        Subject to Customs Clearance Import/Duties and Taxes.
                        </p> --}}
                    </div>
                    <hr>
                    <div class="col-12">
                        <div class="d-flex justify-content-between pb-4">
                            <strong class="text-uppercase text-primary">Destination Charges</strong>
                            <span>Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Destination charges covered."></i></span>
                        </div>
                        <div class="d-flex justify-content-between pb-4">
                            <strong class="text-uppercase text-primary">Delivery Charges</strong>
                            <span>Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Delivery fees covered."></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <strong class="text-uppercase text-primary">Additional Charges</strong>
                            <span class="text-primary fw-bold">{{ $request->currency }} {{ number_format($current_quote['custom'], 2) }}</span>
                        </div>
                        <hr>
                        <div class="ps-2 mt-2">
                            <div class="d-flex justify-content-between">
                                <div>Custom Clearance Charge</div>
                                <div>
                                    <strong>{{ $request->currency }} {{ number_format($current_quote['custom'], 2) }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="alert alert-warning" role="alert">
                                <div class="alert-message small">
                                    <h5 class="alert-heading">Please Note</h5>
                                    <p class="fst-italic">These rates are exclusive of duties, VAT and other taxes (if any). The final price will be confirmed by our operations team after you place the booking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light position-sticky bottom-0 w-100 d-flex justify-content-between p-3 text-primary" style="z-index: 1000;">
            <strong class="text-uppercase">Total Charges</strong>
            <strong>{{ $request->currency }} {{ number_format($current_quote['cost']+$current_quote['custom'], 2) }}</strong>
        </div>
    </div>
    @script
        <script>
            $wire.on('loadJs', () => {
                setTimeout(() => {
                    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    });
                    document.querySelector('#canvas').click()
                }, 500);
            })
        </script>
    @endscript
</div>
