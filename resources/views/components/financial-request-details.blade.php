<table class="table table-sm mt-2 mb-4">
    <tbody>
        <tr>
            <th>Requested By</th>
            <td>{{ $request->user->name }}</td>
        </tr>
        <tr>
            <th>Amount Requested</th>
            <td>{{ $request->currency.' '.number_format($request->amount, 2) }}</td>
        </tr>
        <tr>
            <th>Purpose of Funds</th>
            <td>{{ $request->reason }}</td>
        </tr>
        <tr>
            <th>Supporting Document</th>
            <td><a href="{{ asset('storage/'.$request->document) }}" target="_blank" rel="noopener noreferrer">View document</a></td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                <span class="badge bg-{{ $request->status == 'pending' ? 'info' : ($request->status == 'approved' ? 'success' : 'danger') }} text-capitalize">{{ $request->status }}</span>
            </td>
        </tr>
        <tr>
            <th>Requested On</th>
            <td>{{ $request->created_at->format('d M, Y') }}</td>
        </tr>
        @if ($request->status == 'approved')
            <tr>
                <th>Interest Rate per month</th>
                <td>{{ $request->interest }}%</td>
            </tr>
            <tr>
                <th>Number of months Due</th>
                <td>{{ $request->duration }}</td>
            </tr>
            <tr>
                <th>Customer Approval</th>
                @if ($request->user_id == auth()->user()->id)
                    @if ($request->user_status == 'pending')
                        <td class="d-flex gap-2">
                            <button class="btn btn-success btn-sm" wire:click="accept" wire:confirm="Are you sure you want to accept this request?">Accept</button>
                            <button class="btn btn-danger btn-sm" wire:click="reject" wire:confirm="Are you sure you want to reject this request?">Reject</button>
                        </td>
                    @else
                        <td>
                            <span class="badge bg-{{ $request->user_status == 'accepted' ? 'success' : 'danger' }} text-capitalize">{{ $request->user_status }}</span>
                        </td>
                    @endif
                @else
                    <td>
                        <span class="badge bg-{{ $request->user_status == 'pending' ? 'warning' : ($request->user_status == 'accepted' ? 'success' : 'danger') }} text-capitalize">{{ $request->user_status }}</span>
                    </td>
                @endif
            </tr>
        @endif
    </tbody>
</table>
