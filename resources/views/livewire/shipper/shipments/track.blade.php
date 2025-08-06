<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Shipment Information</h1>
        </div>
        @if (!$isTracking)
            <div class="col-auto ms-auto text-end mt-n1">
                @if ($shipment->status == 'Delivered' && !$shipment->proof_of_payment)
                    <button class="btn btn-outline-primary" wire:click="$toggle('isProof')">Upload Proof of Payment</button>
                @endif
                <button class="btn btn-primary" wire:click="$toggle('isTracking')">Track Shipment</button>
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
        <div class="row">
            <div class="col-lg-{{ $isProof ? '7' : '12' }}">
                <x-shipping-details :$shipment />
            </div>
            @if ($isProof)
                <div class="col-lg-5" x-ref="isProof" x-init="$refs.isProof.scrollIntoView({ behaviour: 'smooth' })">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title mb-0">Upload Proof of Freight Payment</h5>
                        </div>
                        <hr class="mb-0">
                        <div class="card-body">
                            <form wire:submit="save" wire:confirm='Do you confirm that the uploaded file is correct? You will not be able to change it later!' class="p-0">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Proof of Payment <small><em>(Must be a pdf. Not more than 1MB.)</em></small></label>
                                        <input type="file" class="form-control" accept="application/pdf" required wire:model="proof">
                                    </div>
                                    @error('proof')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="text-end my-3">
                                    <button type="button" class="btn btn-outline-primary me-1" wire:click="$toggle('isProof')" wire:loading.remove>Cancel</button>
                                    <button type="submit" class="btn btn-primary" wire:loading.remove wire:target="proof, save">Upload</button>
                                    <button class="btn btn-primary px-5" wire:loading wire:target="proof, save">
                                        <div class="spinner-border spinner-border-sm text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endif
</div>
