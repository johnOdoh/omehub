<div class="container-fluid p-0">
    <div class="mb-2">
        <h1 class="h3 d-inline align-middle">My Invoices</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Invoice For</th>
                            <th>Invoice</th>
                            <th>Date Generated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoices->firstItem() + $loop->index }}</td>
                                <td>{{ $invoice->name }}</td>
                                <td><a class="btn btn-outline-primary btn-sm" href="{{ asset('storage/'.$invoice->url) }}" target="_blank">Download Invoice</a></td>
                                <td>{{ $invoice->created_at->format('d M, Y') }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="6"><h5>No Invoices Yet</h5></td></tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $invoices->links() }}
            </div>
        </div>
    </div>
</div>
