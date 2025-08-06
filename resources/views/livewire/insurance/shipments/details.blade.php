<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h1 class="h3 d-inline align-middle">Shipment Information</h1>
        </div>
        @if (session('generated')) <span x-show="notify('Invoice Generated')"></span> @endif
        <div class="col-auto ms-auto text-end mt-n1">
            @if ($shipment->status == 'Delivered')
                @if ($shipment->insurance_invoice)
                    <a class="btn btn-outline-primary" href="{{ asset('storage/invoices/'.$shipment->insurance_invoice) }}" target="_blank">Download Invoice</a>
                @else
                    <button class="btn btn-outline-primary" wire:click="$toggle('generate')">Generate Invoice</button>
                @endif
            @endif
        </div>
    </div>
    <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="$parent.$set('shipment', null)" class="text-decoration-none">< Back</a></p>
    <div class="row">
        <div class="col-lg-{{ $generate ? '7' : '12' }}">
            <x-shipping-details :$shipment :hasExtra="true" />
        </div>
        @if ($generate)
            <div class="col-lg-5" x-ref="generate" x-init="$refs.generate.scrollIntoView({ behaviour: 'smooth' })">
                <livewire:insurance.shipments.generate-invoice :$shipment />
            </div>
        @endif
    </div>
</div>
