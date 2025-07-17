<div class="container-fluid p-0">
    @if (session('success')) <span x-show="notify('{{ session('success') }}')"></span> @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Update Shipment Status</h5>
                </div>
                <hr class="mb-0">
                <div class="card-body">
                    <form wire:submit="updateStatus" class="p-0">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <div class="form-group">
                                <select class="form-select" required wire:model="status">
                                    <option value="Processing">Processing</option>
                                    <option value="In Transit">In Transit</option>
                                    <option value="Delayed">Delayed</option>
                                    <option value="Arrived">Arrived</option>
                                    <option value="Delivered">Delivered</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label fw-bold">Current Location</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Current Location" required wire:model="location">
                            </div>
                            @error('location')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="text-end my-3">
                            <button type="submit" class="btn btn-primary disabled" wire:loading.remove wire:dirty.class.remove="disabled">Update Status</button>
                            <button class="btn btn-primary px-5" wire:loading>
                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Update Tracking Messages</h5>
                </div>
                <hr class="mb-0">
                <div class="card-body">
                    <form wire:submit="updateTracking" class="p-0">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Message</label>
                            <div class="form-group">
                                <textarea rows="2" class="form-control" placeholder="Message" required wire:model="message"></textarea>
                            </div>
                            @error('message')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label fw-bold">Timestamp</label>
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" placeholder="Date and Time" required wire:model="timestamp">
                            </div>
                            @error('timestamp')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="text-end my-3">
                            <button type="submit" class="btn btn-primary" wire:loading.remove>Add Message</button>
                            <button class="btn btn-primary px-5" wire:loading>
                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-uppercase mb-3 fw-bold text-primary">Cargo Information</h5>
                    <div class="mb-2"><strong>Tracking Number:</strong> {{ $shipment->tracking_number }}</div>
                    <div class="mb-2"><strong>Current Location:</strong> {{ $shipment->current_location ?? 'N/A' }}</div>
                    <div class="mb-2"><strong>Current Status:</strong> {{ $shipment->status }}</div>
                    <div class="mb-2"><strong>Cargo Type:</strong> {{ $shipment->quote->request->cargo_type }}</div>
                    <div class="mb-2"><strong>Booking Date:</strong> {{ $shipment->created_at->format('M d, Y') }}</div>
                    <div class="mb-2"><strong>Departure Date:</strong> {{ $shipment->quote->departure_date->format('M d, Y') }}</div>
                    <div class="mb-2"><strong>Estimated Transit Duration:</strong> {{ $shipment->quote->duration }} days</div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="text-uppercase mb-3 fw-bold text-primary">Tracking Information</h5>
                    <ul class="timeline mt-2 mb-0">
                        @foreach ($shipment->updates as $update)
                            <li class="timeline-item">
                                <span>{{ $update['timestamp'] }}</span>
                                <span class="float-end text-muted text-sm"><a href="#{{ $loop->index }}" wire:confirm='Are you sure you want to delete this update?' wire:click.prevent='deleteUpdate({{ $loop->index }})'>Delete</a></span>
                                <p class="fw-bold">{{ $update['message'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
