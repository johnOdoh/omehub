<div class="container-fluid p-0">
    <div class="card mb-4 p-0 rounded-4">
        <div class="card-body p-0">
            <div class="row align-items-center">
                <div class="col-4 pe-0">
                    <h4 class="text-center py-1 fw-bold">
                        <img src="{{ asset('storage/'.$quote->user->profile()->logo) ?? '' }}" alt="logo" width="70" class="me-2 img-fluid">{{ $quote->user->name }}
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
        <div class="col-xl-8">
            @if ($quote->request->needs_insurance)
                <div class="card mb-3">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0 text-dark fw-bold">Insurance Quotes</h5>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <div class="row g-3 px-2">
                            @foreach ($quote->request->insurance_quotes as $insurance)
                                <div class="col-12 cursor-pointer p-0 {{ $selectedInsurance && $insurance->id == $selectedInsurance->id ? 'bg-light' : '' }}" wire:click="toggleInsurance({{ $insurance->id }})">
                                    <div class="iq p-2 border border-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/'.$insurance->user->profile()->logo) ?? '' }}"  width="50" height="50" class="rounded-circle me-2" alt="logo">
                                                <div>
                                                    <strong>{{ $insurance->user->name }}</strong>
                                                    <p class="small text-muted mb-0">Insurance cover of up to
                                                        <strong>{{ $quote->request->currency }} {{ number_format($insurance->max_payout, 2) }}</strong>
                                                    </p>
                                                    <a href="{{ asset('storage/'.$insurance->file_url) }}" target="_blank" class="small">View coverage details</a>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="fw-bold mb-1">Coverage Charge</p>
                                                <strong class="text-primary small w-100 text-right">{{ $quote->request->currency }} {{ number_format($insurance->charge, 2) }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0 text-dark fw-bold">Carbon Emission</h5>
                </div>
                <hr class="mb-0">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <div class="mb-2"><strong>Do you want to offset Carbon Emission?</strong></div>
                            <p class="small text-muted mb-2">Ticking this will offset your carbon emitted from transporting your goods and ensure clean energy safe for the environment is used</p>
                            <div>
                                <strong class="small mr-3">Charge:</strong>
                                <span class="text-primary fw-bold small">{{ $quote->request->currency }} {{ number_format($carbon_offset, 2) }}</span>
                            </div>
                        </div>
                        <input type="checkbox" class="form-check-input ms-auto fs-1 ml-5 me-3 p-2 border border-primary" wire:model="offset_emission" wire:change="toggleOffset()">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0 text-dark fw-bold">Charge Summary</h5>
                </div>
                <hr class="mb-0">
                <div class="card-body p-0">
                    <div class="row mb-1 p-3">
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-3">
                                <strong class="text-uppercase text-primary small">Freight Charges</strong>
                                <span class="text-primary fw-bold small">{{ $quote->request->currency }} {{ number_format($quote->cost, 2) }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-3">
                                <strong class="text-uppercase text-primary small">Custom Charges</strong>
                                <span class="text-primary fw-bold small">{{ $quote->request->currency }} {{ number_format($quote->custom, 2) }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-3">
                                <strong class="text-uppercase text-primary small">Insurance Charges</strong>
                                <span class="text-primary fw-bold small">
                                    {{ $selectedInsurance ? $quote->request->currency.' '.number_format($selectedInsurance->charge, 2) : '-' }}
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="d-flex justify-content-between pb-3">
                                <strong class="text-uppercase text-primary small">Carbon Emission Offset</strong>
                                <span class="text-primary fw-bold small">
                                    {{ $offset_emission ? $quote->request->currency.' '.number_format($carbon_offset, 2) : '-' }}
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <strong class="text-uppercase text-primary small">Processing Fee</strong>
                                <span class="text-primary fw-bold small">
                                    {{ $quote->request->currency.' '.number_format($processing_fee, 2) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-primary w-100 d-flex justify-content-between p-2 text-white">
                        <strong class="text-uppercase">Total Charges</strong>
                        <strong>{{ $quote->request->currency }} {{ number_format($total, 2) }}</strong>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 mt-3">
                <button class="btn btn-success w-100 py-2 fw-bold" wire:click="book" wire:confirm="Are you sure you want to proceed?">Book Shipment</button>
            </div>
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @script
        <script>
            setTimeout(() => {
                document.querySelectorAll(".iq").forEach((el) => {
                    el.addEventListener('mouseenter', () => {
                        el.classList.add('bg-light');
                    });
                    el.addEventListener('mouseleave', () => {
                        el.classList.remove('bg-light');
                    });
                })
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                });
            }, 500);
        </script>
    @endscript
</div>
