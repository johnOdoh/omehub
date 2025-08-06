<div class="container-fluid p-0">
    @if ($shipment)
        <livewire:admin.shipments.info :$shipment>
    @else
        <div class="mb-2">
            <h1 class="h3 d-inline align-middle">All Shipments</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Tracking Number</th>
                                <th>Status</th>
                                <th>Booking Date</th>
                                <th>Logistic Invoice</th>
                                <th>Insurance Invoice</th>
                                <th>Admin Invoice</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($shipments as $shipment)
                                <tr>
                                    <td>{{ $shipments->firstItem() + $loop->index }}</td>
                                    <td>{{ $shipment->tracking_number }}</td>
                                    <td><span class="badge bg-{{ $shipment->status == 'Delivered' ? 'success' : 'warning' }}">{{ $shipment->status }}</span></td>
                                    <td>{{ $shipment->created_at->format('d M, Y') }}</td>
                                    <td>@if ($shipment->logistics_invoice) <a class="btn btn-outline-success btn-sm" href="{{ asset('storage/invoices/'.$shipment->logistics_invoice) }}" target="_blank">Download Invoice</a> @else - @endif</td>
                                    <td>@if ($shipment->insurance_invoice) <a class="btn btn-outline-primary btn-sm" href="{{ asset('storage/invoices/'.$shipment->insurance_invoice) }}" target="_blank">Download Invoice</a> @else - @endif</td>
                                    <td>@if ($shipment->admin_invoice) <a class="btn btn-outline-secondary btn-sm" href="{{ asset('storage/invoices/'.$shipment->admin_invoice) }}" target="_blank">Download Invoice</a> @else - @endif</td>
                                    <td class="d-flex gap-2">
                                        <button class="btn btn-info btn-sm" wire:click="select({{ $shipment->id }})">View Shipment</button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7"><h5>No Shipments Yet</h5></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $shipments->links() }}
                </div>
            </div>
        </div>
    @endif
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
