<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Financing Requests</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-{{ $request_details ? '7' : '12' }}">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Requested From</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Requested On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($requests as $request)
                                    <tr>
                                        <td>{{ $requests->firstItem() + $loop->index }}</td>
                                        <td>{{ $request->partner->name }}</td>
                                        <td>{{ $request->currency.' '.$request->amount }}</td>
                                        <td><span class="badge bg-{{ $request->status == 'pending' ? 'info' : ($request->status == 'approved' ? 'success' : 'danger') }} text-capitalize">{{ $request->status }}</span></td>
                                        <td>{{ $request->created_at->format('d M, Y') }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-info btn-sm" wire:click="getRequest({{ $request->id }})">View Request</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="6"><h5>No Financing Requests Yet</h5></td></tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $requests->links() }}
                    </div>
                </div>
            </div>
        </div>
        @if ($request_details)
            <div class="col-lg-5" x-ref="request" x-on:admin-changed.window="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                <div x-init="$refs.request.scrollIntoView({ behaviour: 'smooth' })">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-actions float-end">
                                <div class="d-inline">
                                    <a href="#" data-bs-display="static" style="margin-left: 10px" wire:click='close'>
                                        <i class="align-middle fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Request Details</h5>
                        </div>
                        <hr class="mb-0">
                        <div class="card-body">
                            <table class="table table-sm mt-2 mb-4">
                                <tbody>
                                    <tr>
                                        <th>Amount Requested</th>
                                        <td>{{ $request_details->currency.' '.number_format($request_details->amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Purpose of Funds</th>
                                        <td>{{ $request_details->reason }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <span class="badge bg-{{ $request_details->status == 'pending' ? 'info' : ($request_details->status == 'approved' ? 'success' : 'danger') }} text-capitalize">{{ $request_details->status }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Requested On</th>
                                        <td>{{ $request_details->created_at->format('d M, Y') }}</td>
                                    </tr>
                                    @if ($request_details->status == 'approved')
                                        <tr>
                                            <th>Interest Rate per month</th>
                                            <td>{{ $request_details->interest }}%</td>
                                        </tr>
                                        <tr>
                                            <th>Number of months Due</th>
                                            <td>{{ $request_details->duration }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
