<div class="container-fluid p-0">
    <a href="{{ route('logistics.quotes') }}" class="btn btn-primary float-end mt-n1" wire:navigate>All Quotes</a>
    <h1 class="h3 mb-3">Create Quote</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('created')) <span x-show="notify('Quote Added')"></span> @endif
                    <form wire:submit="createQuote">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Origin</label>
                                <select class="form-control choices choice1" required wire:model="origin">
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
                                <select class="form-control choices choice2" required wire:model="destination">
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
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Amount per full-container</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" min="1" step="0.1" placeholder="1.00" required wire:model="full">
                                    <span class="input-group-text">$</span>
                                </div>
                                @error('full')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Amount per half-container</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" min="1" step="0.1" placeholder="1.00" required wire:model="half">
                                    <span class="input-group-text">$</span>
                                </div>
                                @error('half')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Amount per CBM</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" min="1" step="0.1" placeholder="1.00" required wire:model="cbm">
                                    <span class="input-group-text">$</span>
                                </div>
                                @error('cbm')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Duration</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" min="1" step="1" placeholder="5" required wire:model="duration">
                                    <span class="input-group-text">days</span>
                                </div>
                                @error('duration')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end my-3">
                            <button type="submit" class="btn btn-primary" wire:loading.remove>Save Quote</button>
                            <button class="btn btn-primary px-5" wire:loading>
                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div> --}}
    @script
        <script>
            // $wire.on('create', () => {
            //     const wrapper = document.getElementById("insert")
            //     const childs =
            //     `<div class="row">
            //         <div class="mb-3 col-md-6">
            //             <label class="form-label">Pickup</label>
            //             <select class="form-control choices choice1">
            //                 <option value="">Select an option</option>
            //             </select>
            //         </div>
            //         <div class="mb-3 col-md-4">
            //             <label class="form-label">Destination</label>
            //             <select class="form-control choices choice2">
            //                 <option value="">Select an option</option>
            //             </select>
            //         </div>
            //     </div>`
            //     const newChild = document.createElement("div");
            //     newChild.classList.add("row");
            //     newChild.innerHTML = childs;
            //     wrapper.appendChild(newChild);
            // })

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
