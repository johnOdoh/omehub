<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Shipment Information</h1>
        </div>
        @if (session('generated')) <span x-show="notify('Invoice Generated')"></span> @endif
        @if (session('error')) <span x-show="error('{{ session('error') }}')"></span> @endif
        @if (!$isTracking)
            <div class="col-auto ms-auto text-end mt-n1">
                @if ($shipment->logistics_invoice)
                    <a class="btn btn-outline-primary" href="{{ asset('storage/invoices/'.$shipment->logistics_invoice) }}" target="_blank">Download Invoice</a>
                @else
                    <button class="btn btn-outline-primary" wire:click="generateInvoice">Generate Invoice</button>
                @endif
                <button class="btn btn-primary" wire:click="$toggle('isTracking')">Update Tracking</button>
            </div>
        @endif
    </div>
    <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="back()" class="text-decoration-none">< Back</a></p>
    @if ($isTracking)
        <livewire:logistics.shipments.tracking :$shipment />
    @else
        <div class="row">
            <div class="col-lg-{{ $generate ? '7' : '12' }}">
                <x-shipping-details :$shipment />
            </div>
            @if ($generate)
                <div class="col-lg-5" x-ref="generate" x-init="$refs.generate.scrollIntoView({ behaviour: 'smooth' })">
                    <livewire:logistics.shipments.generate-invoice :$shipment />
                </div>
            @endif
        </div>
    @endif
</div>
