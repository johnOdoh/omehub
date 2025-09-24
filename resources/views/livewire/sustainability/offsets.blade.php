<div class="container-fluid p-0">
    @if (session('generated')) <span x-show="notify('Invoice Generated')"></span> @endif
    @if (!$shipment_details)
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto">
                <h1 class="h3 d-inline align-middle">Carbon Offsets</h1>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <button class="btn btn-outline-primary" wire:click="$toggle('generate')">Generate Invoice</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-{{ $user || $generate ? '7' : '12' }}">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-actions float-end">
                            <div class="d-flex gap-2 align-items-center">
                                <strong>Filter:</strong>
                                <input type="month" class="form-control" wire:model="filter" wire:change="updateFilter">
                            </div>
                        </div>
                    </div>
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
                                            <td>USD {{ number_format(config('app.offset'), 2) }}</td>
                                            <td>{{ $shipment->created_at->format('d M, Y') }}</td>
                                            <td class="d-flex gap-2">
                                                <button class="btn btn-primary btn-sm" wire:click="getUser({{ $shipment->user_id }})">View User</button>
                                                <button class="btn btn-info btn-sm" wire:click="getShipment({{ $shipment->id }})">View Shipment</button>
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
            </div>
            @if ($user)
                <div class="col-lg-5" x-ref="user" x-on:user-changed.window="$refs.user.scrollIntoView({ behaviour: 'smooth' })">
                    <div x-init="$refs.user.scrollIntoView({ behaviour: 'smooth' })">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-actions float-end">
                                    <div class="d-inline">
                                        <a href="#" style="margin-left: 10px" wire:click="close" class="text-muted">
                                            <i class="align-middle fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">User {{ $user->name ?? $user }}</h5>
                            </div>
                            <hr class="mb-0">
                            <x-profile-info :$user />
                        </div>
                    </div>
                </div>
            @endif
            @if ($generate)
                <div class="col-lg-5" x-ref="generate" x-init="$refs.generate.scrollIntoView({ behaviour: 'smooth' })">
                    <livewire:sustainability.generate-invoice />
                </div>
            @endif
        </div>
    @else
        <div class="mb-2">
            <h1 class="h3 d-inline align-middle">Shipment Details</h1>
        </div>
        <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="close" class="text-decoration-none">< Back</a></p>
        <div>
            <x-shipping-details :shipment="$shipment_details" />
        </div>
    @endif
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
