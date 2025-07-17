<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Shipment Information</h1>
        </div>
        @if (!$isTracking)
            <div class="col-auto ms-auto text-end mt-n1">
                <button class="btn btn-primary" wire:click="trackShipment">Update Tracking Information</button>
            </div>
        @endif
    </div>
    <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="back()" class="text-decoration-none">< Back</a></p>
    @if ($isTracking)
        <livewire:logistics.shipments.tracking :shipment="$shipmentId" />
    @else
        <div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <h5 class="text-uppercase mb-3 fw-bold text-primary">Logistic Company Information</h5>
                            <div class="mb-2"><strong>Name:</strong> {{ $shipment->quote->user->name }}</div>
                            <div class="mb-2"><strong>Email:</strong> {{ $shipment->quote->user->email }}</div>
                            <div class="mb-2"><strong>Address:</strong> {{ $shipment->quote->user->logistic_provider->address }}</div>
                            <div class="mb-2"><strong>Phone:</strong> {{ $shipment->quote->user->logistic_provider->phone }}</div>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <h5 class="text-uppercase mb-3 fw-bold text-primary">Shipper Information</h5>
                            <div class="mb-2"><strong>Name:</strong> {{ $shipment->user->name }}</div>
                            <div class="mb-2"><strong>Email:</strong> {{ $shipment->user->email }}</div>
                            <div class="mb-2"><strong>Address:</strong> {// $shipment->user->shipper->address //}</div>
                            <div class="mb-2"><strong>Phone:</strong> {// $shipment->user->shipper->phone //}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                @php $currency = $shipment->quote->request->currency @endphp
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <h5 class="text-uppercase mb-3 fw-bold text-primary">Freight Information</h5>
                            <div class="mb-2"><strong>Origin:</strong> {{ $shipment->quote->request->pickup }}</div>
                            <div class="mb-2"><strong>Destination:</strong> {{ $shipment->quote->request->destination }}</div>
                            <div class="mb-2"><strong>Freight Type:</strong> {{ $shipment->quote->request->freight_type }}</div>
                            <div class="mb-2"><strong>Cargo Type:</strong> {{ $shipment->quote->request->cargo_type }}</div>
                            <div class="mb-2"><strong>Incoterm:</strong> {{ $shipment->quote->request->incoterm }}</div>
                            <div class="mb-2"><strong>HS/Tariff Code:</strong> {{ $shipment->quote->request->hs_code }}</div>
                            <div class="mb-2"><strong>Container Type:</strong> {{ $shipment->quote->request->container_type }}</div>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <h5 class="text-uppercase mb-3 fw-bold text-primary">Payment Information</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <strong>Freight Charges</strong>
                                <span>{{ $currency }} {{ number_format($shipment->quote->cost, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <strong>Custom Charges</strong>
                                <span>{{ $currency }} {{ number_format($shipment->quote->custom, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <strong>Insurance Charges</strong>
                                <span>{{ $shipment->insurance_quote_id ? $currency.' '.number_format($shipment->insurance_quote->charge, 2) : '-' }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <strong>Carbon Emission</strong>
                                <span>{{ $shipment->carbon_offset ? $currency.' '.number_format($shipment->carbon_offset, 2) : '-' }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <strong>Total</strong>
                                <span class="fw-bold text-primary">{{ $currency }} {{ number_format($shipment->amount, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
