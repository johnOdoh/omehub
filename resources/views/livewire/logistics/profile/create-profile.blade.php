<div class="card-body">
    @if (session('created')) <span x-show="notify('Profile Created')"></span> @endif
    <form wire:submit="createProfile" class="p-0">
        <div class="my-3">
            <label class="form-label fw-bold">
                Business Name <small><em>(You can only edit this once)</em></small>
            </label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user fa-fw me-1"></i></span>
                <input type="text" class="form-control" placeholder="Name" aria-label="Name" wire:model="name">
            </div>
            @error('name')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="my-3">
            <div class="form-label fw-bold">Business Logo</div>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-file fa-fw me-1"></i></span>
                <input type="file" class="form-control" required wire:model="logo" accept="image/*">
            </div>
            @error('logo')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="mb-3" x-data="{ selectedFlag: 'https://flagcdn.com/{{ strtolower($currentCountry->code) }}.svg', selectedCode: '{{ $currentCountry->dial_code }}' }">
            <div class="border rounded d-flex align-items-center p-2">
                <div class="dropdown me-2">
                    <button class="btn dropdown-toggle d-flex align-items-center p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img :src="selectedFlag" width="24" class="me-1" alt="Bahamas Flag">
                    </button>
                    <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                        @foreach ($countryCodes as $country)
                            <li x-on:click="selectedFlag = 'https://flagcdn.com/{{ strtolower($country->code) }}.svg'; selectedCode = '{{ $country->dial_code }}'; $wire.dial_code = selectedCode"><span class="dropdown-item cursor-pointer"><img src="https://flagcdn.com/{{ strtolower($country->code) }}.svg" width="24" class="me-2">{{ $country->name.'  '.$country->dial_code }}</span></li>
                        @endforeach
                    </ul>
                </div>
                <span class="fw-bold me-2" x-text="selectedCode"></span>
                <input type="hidden" x-bind:value="selectedCode" wire:model="dial_code">
                <input type="tel" class="form-control border-0" placeholder="Phone number" style="flex: 1;" required wire:model='phone'>
            </div>
            @error('phone')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="my-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-key fa-fw me-1"></i></span>
                <input type="text" class="form-control" placeholder="Registration Number/TAX ID" aria-label="Registration Number/VAT ID" required wire:model="reg_no">
            </div>
            @error('reg_no')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="my-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-map-pin fa-fw me-1"></i></span>
                <input type="text" class="form-control" placeholder="Address" aria-label="Address" required wire:model="address">
            </div>
            @error('address')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="my-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-globe fa-fw me-1"></i></span>
                <select id="country" class="form-select" tabindex="1" required wire:model="country"></select>
            </div>
            @error('country')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="my-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-home fa-fw me-1"></i></span>
                <select id="state" class="form-select" tabindex="1" required wire:model="city"></select>
            </div>
            @error('city')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="my-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-tag fa-fw me-1"></i></span>
                <input type="text" class="form-control" placeholder="Zip" aria-label="Zip" required wire:model="zip">
            </div>
            @error('zip')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div class="text-end my-3">
            <button type="button" class="btn btn-outline-primary me-1" x-on:click="$wire.closePage()" wire:loading.remove>Cancel</button>
            <button type="submit" class="btn btn-primary" wire:loading.remove>Create</button>
            <button class="btn btn-primary px-5" wire:loading>
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
        </div>
    </form>
</div>
