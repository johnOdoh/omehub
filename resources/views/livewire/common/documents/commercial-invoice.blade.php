<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Generate a Commercial Invoice</h1>
    @if (session('success')) <span x-show="notify('{{ session('success') }}')"></span> @endif
    @if (!auth()->user()->profile?->is_verified)
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                <div>You will not be able to generate documents until your profile is completed and your documents are verified</div>
            </div>
        </div>
    @endif
    <form wire:submit="generate" wire:confirm="Are you sure all the details you entered are correct?">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h5 class="fw-bold mb-3">Shipment Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Waybill No</label>
                        <input type="text" class="form-control" placeholder="Waybill No" required wire:model="waybill_no">
                        @error('waybill_no')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Shipper's Export Reference No</label>
                        <input type="text" class="form-control" placeholder="Reference No" required wire:model="reference_no">
                        @error('reference_no')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Reason for Export</label>
                        <input type="text" class="form-control" placeholder="Reason" wire:model="reason" required>
                        @error('reason')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Date of Export</label>
                        <input type="date" class="form-control" placeholder="Date" wire:model="export_date" required>
                        @error('export_date')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Origin Country</label>
                        <select class="form-control" required wire:model="origin">
                            <option value="">Select a country...</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('origin')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Destination Country</label>
                        <select class="form-control" required wire:model="destination">
                            <option value="">Select a country...</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('destination')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h5 class="fw-bold mb-3">Shipper/Exporter Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Exporter Name" required wire:model="exporter_name">
                        @error('exporter_name')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Exporter Address" required wire:model="exporter_address">
                        @error('exporter_address')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" placeholder="Exporter Phone" required wire:model="exporter_phone">
                        @error('exporter_phone')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Exporter Country</label>
                        <select class="form-control" required wire:model="exporter_country">
                            <option value="">Select a country...</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('exporter_country')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Exporter City" required wire:model="exporter_city">
                        @error('exporter_city')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Zip</label>
                        <input type="text" class="form-control" placeholder="Exporter Zip" required wire:model="exporter_zip">
                        @error('exporter_zip')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h5 class="fw-bold mb-3">Consignee Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Consignee Name" required wire:model="consignee_name">
                        @error('consignee_name')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Consignee Address" required wire:model="consignee_address">
                        @error('consignee_address')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" placeholder="Consignee Phone" required wire:model="consignee_phone">
                        @error('consignee_phone')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Consignee Country</label>
                        <select class="form-control" required wire:model="consignee_country">
                            <option value="">Select a country...</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('consignee_country')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Consignee City" required wire:model="consignee_city">
                        @error('consignee_city')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Zip</label>
                        <input type="text" class="form-control" placeholder="Consignee Zip" required wire:model="consignee_zip">
                        @error('consignee_zip')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check m-0">
                        <input type="checkbox" class="form-check-input" wire:model.lazy="has_importer">
                        <span class="form-check-label">Importer is different from Consignee</span>
                    </label>
                    @error('has_importer')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
            </div>
        </div>
        @if ($has_importer)
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <h5 class="fw-bold mb-3">Importer Details</h5>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Importer Name" required wire:model="importer_name">
                            @error('importer_name')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Importer Address" required wire:model="importer_address">
                            @error('importer_address')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Importer Phone" required wire:model="importer_phone">
                            @error('importer_phone')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Importer Country</label>
                            <select class="form-control" required wire:model="importer_country">
                                <option value="">Select a country...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('importer_country')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="Importer City" required wire:model="importer_city">
                            @error('importer_city')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Zip</label>
                            <input type="text" class="form-control" placeholder="Importer Zip" required wire:model="importer_zip">
                            @error('importer_zip')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h5 class="fw-bold mb-3">Cargo Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Invoice Currency</label>
                        <select class="form-select" wire:model.lazy="currency" required>
                            <option value="">Select...</option>
                            <option value="USD">US Dollar (USD)</option>
                            <option value="EUR">Euro (EUR)</option>
                            <option value="GBP">British Pound (GBP)</option>
                            <option value="NGN">Nigerian Naira (NGN)</option>
                        </select>
                        @error('currency')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Unit of Measurement (Weight)</label>
                        <select class="form-select" wire:model.lazy="unit" required>
                            <option value="">Select...</option>
                            <option value="kg">KG</option>
                            <option value="lb">LB</option>
                        </select>
                        @error('unit')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div id="insert">
            <div class="card parcel">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Parcel No</label>
                            <input type="text" class="form-control" placeholder="Parcel No" wire:model="parcel_no.0" required>
                            @error('parcel_no.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Type of Packaging</label>
                            <input type="text" class="form-control" placeholder="eg: Carton, Box, Crate etc" wire:model="type.0" required>
                            @error('type.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Qty per Package</label>
                            <input type="number" class="form-control" min="1" placeholder="Qty per Package" wire:model="qty_per_package.0" required>
                            @error('qty_per_package.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit of Measurement (Parcel)</label>
                            <select class="form-select" wire:model="parcel_unit.0" required>
                                <option value="">Select...</option>
                                <option value="pieces">Pieces</option>
                                <option value="unit">Unit</option>
                                <option value="set">Set</option>
                            </select>
                            @error('parcel_unit.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Full Description</label>
                            <textarea class="form-control" wire:model="description.0" rows="2" placeholder="What is it? What is it made of? What is it used for? What is it a component of? e.g.) Ladies' 100% Silk Knitted Blouse." required></textarea>
                            @error('description.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">HS Code</label>
                            <input type="text" class="form-control" placeholder="HS Code" required wire:model="hs_code.0">
                            @error('hs_code.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Weight {{ $unit ? '('.$unit.')' : '' }}</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Weight" wire:model="weight.0" required>
                            @error('weight.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" min="1" placeholder="Quantity" required wire:model="qty.0">
                            @error('qty.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit Value {{ $currency ? '('.$currency.')' : '' }}</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Amount for each" required wire:model="amount.0">
                            @error('amount.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                            <div class="float-end toggler">
                                <a href="#" wire:click.prevent="$dispatch('addParcel')">Add more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile?->is_verified) disabled @endif wire:loading.remove>Generate Document</button> --}}
                <button type="submit" class="btn btn-primary" wire:loading.remove>Generate Document</button>
                <button class="btn btn-primary px-5" wire:loading>
                    <div class="spinner-border spinner-border-sm text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
            </div>
        </div>
    </form>
    @script
        <script>
            const parcel = document.getElementsByClassName("parcel")
            const wrapper = document.getElementById("insert")
            $wire.on('addParcel', () => {
                const parcelLength = parcel.length
                wrapper.querySelectorAll(".toggler").forEach((el) => {
                    el.style.display = 'none'
                })
                const child =
                `<div class="card-body">
                    <div class="row mb-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Parcel No</label>
                            <input type="text" class="form-control" placeholder="Parcel No" wire:model="parcel_no.${parcelLength}" required>
                            @error('parcel_no.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Type of Packaging</label>
                            <input type="text" class="form-control" placeholder="eg: Carton, Box, Crate etc" wire:model="type.${parcelLength}" required>
                            @error('type.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Qty per Package</label>
                            <input type="number" class="form-control" min="1" placeholder="Qty per Package" wire:model="qty_per_package.${parcelLength}" required>
                            @error('qty_per_package.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit of Measurement (Parcel)</label>
                            <select class="form-select" wire:model="parcel_unit.${parcelLength}" required>
                                <option value="">Select...</option>
                                <option value="pieces">Pieces</option>
                                <option value="unit">Unit</option>
                                <option value="set">Set</option>
                            </select>
                            @error('parcel_unit.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Full Description</label>
                            <textarea class="form-control" wire:model="description.${parcelLength}" rows="2" placeholder="What is it? What is it made of? What is it used for? What is it a component of? e.g.) Ladies' 100% Silk Knitted Blouse." required></textarea>
                            @error('description.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">HS Code</label>
                            <input type="text" class="form-control" placeholder="HS Code" required wire:model="hs_code.${parcelLength}">
                            @error('hs_code.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Weight {{ $unit ? '('.$unit.')' : '' }}</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Weight" wire:model="weight.${parcelLength}" required>
                            @error('weight.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" min="1" placeholder="Quantity" required wire:model="qty.${parcelLength}">
                            @error('qty.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit Value {{ $currency ? '('.$currency.')' : '' }}</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Amount for each" required wire:model="amount.${parcelLength}">
                            @error('amount.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                            <div class="float-end toggler">
                                <a href="" wire:click.prevent="$dispatch('removeParcel', ${parcelLength})" class="me-2">Remove</a>
                                <a href="" wire:click.prevent="$dispatch('addParcel')">Add more</a>
                            </div>
                        </div>
                    </div>
                </div>`
                const newChild = document.createElement("div")
                newChild.classList.add('card', 'parcel')
                newChild.innerHTML = child
                wrapper.appendChild(newChild)
                $wire.index = parcelLength
            })
            $wire.on('removeParcel', (index) => {
                if (parcel.length > 1) {
                    parcel[index].remove()
                }
                parcel[index-1].querySelector(".toggler").style.display = 'block'
                $wire.index = index - 1
            })
        </script>
    @endscript
</div>
