<div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Our Document Generation Section is currently locked</h1>
            <p class="lead text-center mb-4">Luckily, you can unlock it with as little as $5 per month.</p>
            <div class="row py-4">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card text-center h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-4">
                                <h5 class="mb-3">Monthly</h5>
                                <span class="display-4">$5</span><span>/month</span>
                            </div>
                            <h6>Includes:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    Access to Commercial Invoice and Packing List generation
                                </li>
                                <li class="mb-2">
                                    Unlimited document generations
                                </li>
                                <li class="mb-2">
                                    Instant document generation
                                </li>
                            </ul>
                            <div class="mt-auto">
                                <button class="btn btn-lg btn-outline-primary" onclick="makePayment('monthly', 5)">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card text-center h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-4">
                                <h5 class="mb-3">Biannual</h5>
                                <span class="display-4">$28</span><span>/6 months</span>
                            </div>
                            <h6>Includes:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    Access to Commercial Invoice and Packing List generation
                                </li>
                                <li class="mb-2">
                                    Unlimited document generations
                                </li>
                                <li class="mb-2">
                                    Instant document generation
                                </li>
                            </ul>
                            <div class="mt-auto">
                                <button class="btn btn-lg btn-primary" onclick="makePayment('biannual', 28)">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card text-center h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-4">
                                <h5 class="mb-3">Annual</h5>
                                <span class="display-4">$50</span><span>/year</span>
                            </div>
                            <h6>Includes:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    Access to Commercial Invoice and Packing List generation
                                </li>
                                <li class="mb-2">
                                    Unlimited document generations
                                </li>
                                <li class="mb-2">
                                    Instant document generation
                                </li>
                            </ul>
                            <div class="mt-auto">
                                <button class="btn btn-lg btn-outline-primary" onclick="makePayment('annual', 50)">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:100000;" id="loadingOverlay" class="d-none">
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script>
        function makePayment(plan, amount) {
            document.querySelector('#loadingOverlay').classList.remove('d-none');
            FlutterwaveCheckout({
                public_key: '{{ env('FLUTTERWAVE_PUBLIC_KEY') }}',
                tx_ref: '{{ uniqid('ome_', true) }}',
                amount: amount,
                currency: 'USD',
                payment_options: 'card',
                redirect_url: '{{ route('payment.document') }}',
                customer: {
                    email: '{{ auth()->user()->email }}',
                    name: '{{ auth()->user()->name }}',
                },
                customizations: {
                    title: '{{ config('app.name') }}',
                    description: '{{ config('app.name') }} document generation fee',
                    logo: '{{ asset('assets/img/favicon.png') }}',
                },
                meta: {
                    plan: plan,
                    loc: "{{ $loc }}"
                }
            });
        }
    </script>
</div>
