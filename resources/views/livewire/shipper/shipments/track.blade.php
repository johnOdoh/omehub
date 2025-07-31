<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Shipment Information</h1>
        </div>
        @if (!$isTracking)
            <div class="col-auto ms-auto text-end mt-n1">
                @if ($shipment->invoice)
                    <button class="btn btn-outline-primary" wire:click="">Download Invoice</button>
                @endif
                <button class="btn btn-primary" wire:click="trackShipment">Track Shipment</button>
            </div>
        @endif
    </div>
    <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="back()" class="text-decoration-none">< Back</a></p>
    @if ($isTracking)
        <div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <h5 class="text-uppercase mb-3 fw-bold text-primary">Cargo Information</h5>
                            <div class="mb-2"><strong>Tracking Number:</strong> {{ $shipment->tracking_number }}</div>
                            <div class="mb-2"><strong>Current Location:</strong> {{ $shipment->current_location ?? 'N/A' }}</div>
                            <div class="mb-2"><strong>Current Status:</strong> {{ $shipment->status }}</div>
                            <div class="mb-2"><strong>Cargo Type:</strong> {{ $shipment->quote->request->cargo_type }}</div>
                            <div class="mb-2"><strong>Booking Date:</strong> {{ $shipment->created_at->format('M d, Y') }}</div>
                            <div class="mb-2"><strong>Departure Date:</strong> {{ $shipment->quote->departure_date->format('M d, Y') }}</div>
                            <div class="mb-2"><strong>Estimated Transit Duration:</strong> {{ $shipment->quote->duration }} days</div>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <h5 class="text-uppercase mb-3 fw-bold text-primary">Tracking Information</h5>
                            <ul class="timeline mt-2 mb-0">
                                @foreach (collect($shipment->updates)->sortBy('timestamp')->toArray() as $update)
                                    <li class="timeline-item">
                                        <span>{{ $update['timestamp'] }}</span>
                                        <p class="fw-bold">{{ $update['message'] }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div>
            <x-shipping-details :$shipment />
        </div>
    @endif
</div>
