<div class="container-fluid p-0">
    <div class="card mb-4 p-0 rounded-4">
        <div class="card-body p-0">
            <div class="row align-items-center">
                <div class="col-4 pe-0">
                    <h4 class="text-center py-1 fw-bold">
                        <img src="{{ asset('storage/'.$quote->user->logistic_provider->logo) ?? '' }}" alt="logo" width="70" class="me-2 img-fluid">{{ $quote->user->name }}
                    </h4>
                </div>
                <div class="col-4 border-start border-end px-0 py-3">
                    <div class="ps-2">
                        <p class="mb-1"><strong>Estimated transit time</strong></p>
                        <div class="text-primary">{{ $quote->duration }} days</div>
                    </div>
                    <hr>
                    <div class="ps-2">
                        <p class="mb-1"><strong>Departure Date</strong></p>
                        <div class="text-primary">{{ $quote->departure_date->format('M d, Y') }}</div>
                    </div>
                </div>
                <div class="col-4">
                    <p class="mb-1"><strong>Total Charge</strong></p>
                    <div class="text-primary">{{ $quote->request->currency }} {{ number_format($quote->custom+$quote->cost, 2) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0 text-dark fw-bold">Charge Summary</h5>
                </div>
                <hr class="mb-0">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-4">
                                <strong class="text-uppercase text-primary small">Pickup Charges</strong>
                                <span class="small">Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Pickup charges covered."></i></span>
                            </div>
                            <div class="d-flex justify-content-between pb-4">
                                <strong class="text-uppercase text-primary small">Origin Charges</strong>
                                <span class="small">Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Origin handling fees covered."></i></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-4">
                                <strong class="text-uppercase text-primary small">Freight Charges</strong>
                                <span class="text-primary fw-bold small">{{ $quote->request->currency }} {{ number_format($quote->cost, 2) }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-4">
                                <strong class="text-uppercase text-primary small">Destination Charges</strong>
                                <span class="small">Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Destination charges covered."></i></span>
                            </div>
                            <div class="d-flex justify-content-between pb-4">
                                <strong class="text-uppercase text-primary small">Delivery Charges</strong>
                                <span class="small">Included <i class="fas fa-info-circle cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Delivery fees covered."></i></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <strong class="text-uppercase text-primary small">Additional Charges</strong>
                                <span class="text-primary fw-bold small">{{ $quote->request->currency }} {{ number_format($quote->custom, 2) }}</span>
                            </div>
                            <hr class="my-1">
                            <div class="ps-2">
                                <div class="d-flex justify-content-between">
                                    <div class="small">Custom Clearance Charge</div>
                                    <div>
                                        <strong class="small">{{ $quote->request->currency }} {{ number_format($quote->custom, 2) }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @script
        <script>
            setTimeout(() => {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                });
            }, 500);
        </script>
    @endscript
</div>
