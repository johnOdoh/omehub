<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Enter your shipping needs to get the best</h1>
    <div class="card">
        <div class="card-body">
            @if (session('submitted'))
                <div class="alert alert-primary alert-dismissible" role="alert">
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
                        <label class="form-label">What volume of container do you need?</label>
                        <select class="form-select" wire:model.lazy="mode">
                            <option value="">Select...</option>
                            <option value="FCL">Full Container Load(FCL)</option>
                            <option value="LCL">Less Container Load(LCL)</option>
                        </select>
                        @error('mode')
                            <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                        @enderror
                    </div>
                    @if ($mode == 'FCL')
                        <div class="mb-3 col-md-6">
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="qty" min="1" wire:model="qty">
                                    <label for="qty" class="fw-bold">Qty</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select" wire:model="container_type">
                                        <option value=""></option>
                                        <option value="20ft Dry Van">20ft Dry Van</option>
                                        <option value="40ft Dry Van">40ft Dry Van</option>
                                        <option value="40ft Dry Van High Cube">40ft Dry Van High Cube</option>
                                    </select>
                                    <label for="qty" class="fw-bold">Container Type</label>
                                    @error('container_type')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($mode == 'LCL')
                        <div class="mb-3 col-md-6">
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="qty" value="1" min="1" wire:model="qty">
                                    <label for="qty" class="fw-bold">Qty</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="weight" step="0.01" wire:model="weight">
                                    <label for="weight" class="fw-bold">Weight(kg)</label>
                                    @error('weight')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="cbm" step="0.01" wire:model="volume">
                                    <label for="cbm" class="fw-bold">Volume(cbm)</label>
                                    @error('volume')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" wire:loading.remove>Request Quote</button>
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
    @script
        <script>
            $wire.on('load-countries', (val) => {
                setTimeout(() => {
                    document.querySelectorAll(".choices").forEach((el, key) => {
                        new Choices(document.querySelector(".choice"+(key+1)))
                    });
                }, val);
            });
        </script>
    @endscript
</div>
