<div class="container-fluid p-0">
    <div class="card">
        <div class="card-header pb-0">
            <h5 class="card-title mb-0">Requests</h5>
        </div>
        <hr class="mb-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Freight Type</th>
                            <th>Submission Ends In</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requests as $quote_request)
                            <tr>
                                <td>{{ $requests->firstItem() + $loop->index }}</td>
                                <td>{{ $quote_request->pickup }}</td>
                                <td>{{ $quote_request->destination }}</td>
                                <td>{{ $quote_request->freight_type }}</td>
                                @if($quote_request->expires_at->isPast())
                                    <td><span class="badge bg-danger">Ended</span></td>
                                @else
                                    <td class="fw-bold text-info">{{ $quote_request->expires_at->diffAsCarbonInterval()->forHumans() }}</td>
                                @endif
                                <td>
                                    @if(!$quote_request->expires_at->isPast())
                                        <button class="btn btn-info btn-sm" wire:click="$parent.viewRequest({{ $quote_request->id }})">View</button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="6"><h5>No Requests Yet</h5></td></tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $requests->links() }}
            </div>
        </div>
    </div>
</div>
