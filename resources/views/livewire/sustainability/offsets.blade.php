<div class="container-fluid p-0">
    @if (session('booked')) <span x-show="notify('Your Shipment has been successfully Booked')"></span> @endif
    <div class="mb-2">
        <h1 class="h3 d-inline align-middle">Carbon Offsets</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Made By</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($shipments as $shipment)
                            <tr>
                                <td>{{ $shipments->firstItem() + $loop->index }}</td>
                                <td>{{ $shipment->user->name }}</td>
                                <td>{{ $shipment->quote->request->currency.' '.number_format($shipment->carbon_offset, 2) }}</td>
                                <td>{{ $shipment->created_at->format('d M, Y') }}</td>
                                <td class="d-flex gap-2">
                                    <button class="btn btn-info btn-sm" wire:click="">View Shipment</button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5"><h5>No Shipments Yet</h5></td></tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $shipments->links() }}
            </div>
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
