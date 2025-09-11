<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Generate a Packing List</h1>
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
                    <h5 class="fw-bold mb-3">Order Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Our Invoice No</label>
                        <input type="text" class="form-control" placeholder="Invoice No" required wire:model="invoice_no">
                        @error('invoice_no')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Order No</label>
                        <input type="text" class="form-control" placeholder="Order No" required wire:model="order_no">
                        @error('order_no')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Customer Order No</label>
                        <input type="text" class="form-control" placeholder="Customer Order No" required wire:model="cus_no">
                        @error('cus_no')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Date Ordered</label>
                        <input type="date" class="form-control" placeholder="Date Ordered" wire:model="order_date" required>
                        @error('order_date')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h5 class="fw-bold mb-3">Customer Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Customer Name" required wire:model="customer_name">
                        @error('customer_name')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Customer Address" required wire:model="customer_address">
                        @error('customer_address')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" placeholder="Customer Phone" required wire:model="customer_phone">
                        @error('customer_phone')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Customer Country</label>
                        <select class="form-control" required wire:model="customer_country">
                            <option value="">Select a country...</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('customer_country')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Customer City" required wire:model="customer_city">
                        @error('customer_city')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Zip</label>
                        <input type="text" class="form-control" placeholder="Customer Zip" required wire:model="customer_zip">
                        @error('customer_zip')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h5 class="fw-bold mb-3">Shipment Details</h5>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Container No</label>
                        <input type="text" class="form-control" placeholder="Container No" required wire:model="container_no">
                        @error('container_no')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Shipped Via</label>
                        <input type="text" class="form-control" placeholder="Shipping Company" required wire:model="shipped_via">
                        @error('shipped_via')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Date Shipped</label>
                        <input type="date" class="form-control" placeholder="Date Shipped" required wire:model="date_shipped">
                        @error('date_shipped')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Attention</label>
                        <input type="text" class="form-control" placeholder="Attention" required wire:model="attention">
                        @error('attestation')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Comments</label>
                        <input type="text" class="form-control" placeholder="eg: handle with care, deliver to door etc" required wire:model="comments">
                        @error('comments')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Packed By</label>
                        <input type="text" class="form-control" placeholder="Packed By" required wire:model="packed_by">
                        @error('packed_by')
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
                            <label class="form-label">Item No</label>
                            <input type="text" class="form-control" placeholder="Item No" wire:model="item_no.0" required>
                            @error('item_no.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" min="1" placeholder="Quantity" wire:model="qty.0" required>
                            @error('qty.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Qty Shipped</label>
                            <input type="number" class="form-control" min="1" placeholder="Qty Shipped" wire:model="qty_shipped.0" required>
                            @error('qty_shipped.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Qty Back-ordered</label>
                            <input type="number" class="form-control" placeholder="Qty Back-ordered" wire:model="qty_back.0" required>
                            @error('qty_back.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" wire:model="description.0" rows="2" placeholder="Description" required></textarea>
                            @error('description.0')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit of Measurement</label>
                            <select class="form-select" wire:model="unit.0" required>
                                <option value="">Select...</option>
                                <option value="kg">KG</option>
                                <option value="lb">LB</option>
                            </select>
                            @error('unit.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit Weight</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Unit Weight" required wire:model="unit_weight.0">
                            @error('unit_weight.0')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Total Weight</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Total Weight" required wire:model="total_weight.0">
                            @error('total_weight.0')
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
                            <label class="form-label">Item No</label>
                            <input type="text" class="form-control" placeholder="Item No" wire:model="item_no.${parcelLength}" required>
                            @error('item_no.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" min="1" placeholder="Quantity" wire:model="qty.${parcelLength}" required>
                            @error('qty.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Qty Shipped</label>
                            <input type="number" class="form-control" min="1" placeholder="Qty Shipped" wire:model="qty_shipped.${parcelLength}" required>
                            @error('qty_shipped.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Qty Back-ordered</label>
                            <input type="number" class="form-control" placeholder="Qty Back-ordered" wire:model="qty_back.${parcelLength}" required>
                            @error('qty_back.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" wire:model="description.${parcelLength}" rows="2" placeholder="Description" required></textarea>
                            @error('description.${parcelLength}')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit of Measurement</label>
                            <select class="form-select" wire:model="unit.${parcelLength}" required>
                                <option value="">Select...</option>
                                <option value="kg">KG</option>
                                <option value="lb">LB</option>
                            </select>
                            @error('unit.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Unit Weight</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Unit Weight" required wire:model="unit_weight.${parcelLength}">
                            @error('unit_weight.${parcelLength}')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Total Weight</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" placeholder="Total Weight" required wire:model="total_weight.${parcelLength}">
                            @error('total_weight.${parcelLength}')
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
