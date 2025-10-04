<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Enter your shipping needs to get the best quotes</h1>
    <div class="card">
        <div class="card-body">
            @if (!auth()->user()->profile?->is_verified)
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="alert-message d-flex">
                        <strong class="me-2"><i class="fa fa-warning"></i></strong>
                        <div>You will not be able to request quotes until your profile is completed and your documents are verified</div>
                    </div>
                </div>
            @endif
            @if (session('submitted'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="alert-icon">
                        <i class="fa fa-fw fa-check"></i>
                    </div>
                    <div class="alert-message">Your request have been submitted. You will get quotes soon</div>
                </div>
            @endif
            <form wire:submit="requestQuote">
                <div class="row mb-2">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Origin</label>
                        <select class="form-control" required wire:model="origin">
                            <option value="">Choose a location</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('origin')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Destination</label>
                        <select class="form-control" required wire:model="destination">
                            <option value="">Choose a location</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('destination')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Type of Cargo</label>
                        <select class="form-select" required wire:model="type">
                            <option value="">Select...</option>
                            <option value="Household Goods">Household Goods</option>
                            <option value="Commercial Cargo">Commercial Cargo</option>
                            <option value="Perishable Goods">Perishable Goods</option>
                            {{-- <option value="Animals & Livestock">Animals & Livestock</option>
                            <option value="Hazardous Goods">Hazardous Goods</option> --}}
                        </select>
                        @error('type')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Type of Freight</label>
                        <select class="form-select" required wire:model="freight">
                            <option value="">Select...</option>
                            <option value="Air Freight">Air Freight</option>
                            <option value="Ocean Freight">Ocean Freight</option>
                        </select>
                        @error('freight')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">HS code/Tariff code
                            <a href="#" target="_blank" title="What is HS code/Tariff code?" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <input type="text" class="form-control" wire:model="hs_code" required>
                        @error('hs_code')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Incoterm
                            <a href="#" target="_blank" title="What are Incoterms?" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <select class="form-select" wire:model="incoterm" required>
                            <option value="">Select...</option>
                            <option value="CIP">Carriage and Insurance Paid To (CIP)</option>
                            <option value="CPT">Carriage Paid To (CPT)</option>
                            <option value="CFR">Cost and Freight (CFR)</option>
                            <option value="CIF">Cost, Insurance and Freight (CIF)</option>
                            <option value="DDP">Delivered Duty Paid (DDP)</option>
                            <option value="DAP">Delivered at Place (DAP)</option>
                            <option value="DPU">Delivered at Place Unloaded (DPU)</option>
                            <option value="EXW">Ex Works (EXW)</option>
                            <option value="FAS">Free Alongside Ship (FAS)</option>
                            <option value="FCA">Free Carrier (FCA)</option>
                            <option value="FOB">Free on Board (FOB)</option>
                        </select>
                        @error('incoterm')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">In what currency do you need the quote?</label>
                        <select class="form-select" wire:model="currency" required>
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
                    {{-- <div class="mb-3 col-md-6">
                        <label class="form-label">Do you need Insurance? <i class="fa fa-info-circle" title="Choose yes if you also need insurance quotes" data-bs-toggle="tooltip" data-bs-placement="top"></i></label>
                        <select class="form-select" wire:model="insurance" required>
                            <option value="">Select...</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                        @error('insurance')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div> --}}
                    <div class="mb-3 col-md-6">
                        <label class="form-label">What volume of container do you need?</label>
                        <select class="form-select" wire:model.lazy="mode" required>
                            <option value="">Select...</option>
                            <option value="FCL">Full Container Load(FCL)</option>
                            <option value="LCL">Less Container Load(LCL)</option>
                        </select>
                        @error('mode')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2" id="insert">
                    @if ($mode == 'FCL')
                        <div class="mb-3 col-md-6 fcl">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="qty" min="1" wire:model="qty.0" required>
                                    <label for="qty" class="fw-bold">Qty</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select" wire:model="container_type.0" id="container_type" required>
                                        <option value=""></option>
                                        <option value="20ft Dry Van">20ft Dry Van</option>
                                        <option value="40ft Dry Van">40ft Dry Van</option>
                                        <option value="40ft Dry Van High Cube">40ft Dry Van High Cube</option>
                                    </select>
                                    <label for="container_type" class="fw-bold">Container Type</label>
                                    @error('container_type.0')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="float-end toggler">
                                {{-- <a href="" wire:click.prevent="$dispatch('removeFCL', 0)" class="me-2 remove-btn">Remove</a> --}}
                                <a href="" wire:click.prevent="$dispatch('addFCL')">Add more</a>
                            </div>
                        </div>
                    @endif
                    @if ($mode == 'LCL')
                        <div class="col-12">
                            <small>Don't know your cargo <em>CBM</em>? Use the
                            <a href="{{ route('shipper.dashboard') }}" target="_blank">CBM calculator</a> on your dashboard</small>
                        </div>
                        <div class="mb-3 col-md-6 lcl">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="qty" min="1" wire:model="qty.0" required>
                                    <label for="qty" class="fw-bold">Qty</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="weight" step="0.01" min="0.01" wire:model="weight.0" required>
                                    <label for="weight" class="fw-bold">Weight(kg)</label>
                                    @error('weight.0')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="cbm" step="0.01" min="0.01" wire:model="volume.0" required>
                                    <label for="cbm" class="fw-bold">Volume(cbm)</label>
                                    @error('volume.0')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="float-end toggler">
                                {{-- <a href="" wire:click.prevent="$dispatch('removeFCL', 0)" class="me-2 remove-btn">Remove</a> --}}
                                <a href="#" wire:click.prevent="$dispatch('addLCL')">Add more</a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-check m-0">
                        <input type="checkbox" class="form-check-input" wire:model="declaration" required>
                        <span class="form-check-label">I declare that my goods are not banned or prohibited</span>
                    </label>
                    @error('declaration')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile?->is_verified) disabled @endif wire:loading.remove>Request Quote</button>
                        <button class="btn btn-primary px-5" wire:loading>
                            <div class="spinner-border spinner-border-sm text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <span
    class="fa fa-info-circle text-secondary ms-2"
    data-bs-toggle="tooltip"
    data-bs-placement="top"
    title="The quoted price may change if your goods enter the port of loading after this date. Surcharges may also apply subject to GRIs."
    style="cursor: pointer;"
></span> --}}
    @script
        <script>
            setTimeout(() => {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                });
            }, 500);
            const fcl = document.getElementsByClassName("fcl")
            const lcl = document.getElementsByClassName("lcl")
            const wrapper = document.getElementById("insert")
            $wire.on('addFCL', () => {
                const fclLength = fcl.length
                wrapper.querySelectorAll(".toggler").forEach((el) => {
                    el.style.display = 'none'
                })
                const child =
                `<div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="qty-${fclLength}" value="1" min="1" wire:model="qty.${fclLength}" required>
                        <label for="qty-${fclLength}" class="fw-bold">Qty</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" wire:model="container_type.${fclLength}" id="container_type-${fclLength}" required>
                            <option value=""></option>
                            <option value="20ft Dry Van">20ft Dry Van</option>
                            <option value="40ft Dry Van">40ft Dry Van</option>
                            <option value="40ft Dry Van High Cube">40ft Dry Van High Cube</option>
                        </select>
                        <label for="container_type-${fclLength}" class="fw-bold">Container Type</label>
                        @error('container_type.${fclLength}')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="float-end toggler">
                    <a href="" wire:click.prevent="$dispatch('removeFCL', ${fclLength})" class="me-2">Remove</a>
                    <a href="" wire:click.prevent="$dispatch('addFCL')">Add more</a>
                </div>`
                const newChild = document.createElement("div")
                newChild.classList.add('mb-3', 'col-md-6', 'fcl')
                newChild.innerHTML = child
                wrapper.appendChild(newChild)
                $wire.index = fclLength
            })
            $wire.on('addLCL', () => {
                const lclLength = lcl.length
                wrapper.querySelectorAll(".toggler").forEach((el) => {
                    el.style.display = 'none'
                })
                const child =
                `<div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="qty-${lclLength}" value="1" min="1" wire:model="qty.${lclLength}" required>
                        <label for="qty-${lclLength}" class="fw-bold">Qty</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="weight-${lclLength}" step="0.01" min="0.01" wire:model="weight.${lclLength}" required>
                        <label for="weight-${lclLength}" class="fw-bold">Weight(kg)</label>
                        @error('weight.${lclLength}')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="cbm-${lclLength}" step="0.01" min="0.01" wire:model="volume.${lclLength}" required>
                        <label for="cbm-${lclLength}" class="fw-bold">Volume(cbm)</label>
                        @error('volume.${lclLength}')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                </div>
                <div class="float-end toggler">
                    <a href="" wire:click.prevent="$dispatch('removeLCL', ${lclLength})" class="me-2 remove-btn">Remove</a>
                    <a href="" wire:click.prevent="$dispatch('addLCL')">Add more</a>
                </div>`
                const newChild = document.createElement("div")
                newChild.classList.add('mb-3', 'col-md-6', 'lcl')
                newChild.innerHTML = child
                wrapper.appendChild(newChild)
                $wire.index = lclLength
            })
            $wire.on('removeFCL', (index) => {
                if (fcl.length > 1) {
                    fcl[index].remove()
                }
                fcl[index-1].querySelector(".toggler").style.display = 'block'
                $wire.index = index - 1
            })
            $wire.on('removeLCL', (index) => {
                if (lcl.length > 1) {
                    lcl[index].remove()
                }
                lcl[index-1].querySelector(".toggler").style.display = 'block'
                $wire.index = index - 1
            })
        </script>
    @endscript
    <script>
        // $wire.on('load-countries', (val) => {
        //     setTimeout(() => {
        //         document.querySelectorAll(".choices").forEach((el, key) => {
        //             new Choices(document.querySelector(".choice"+(key+1)))
        //         });
        //     }, val);
        // });

    </script>
</div>
