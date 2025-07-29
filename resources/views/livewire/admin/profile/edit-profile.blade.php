<div class="card-body">
    @if (session('updated')) <span x-show="notify('Profile Updated')"></span> @endif
    <form wire:submit="updateProfile" class="p-0">
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
            <button type="button" class="btn btn-outline-primary me-1" wire:click="$parent.closeCreateProfile" wire:loading.remove>Cancel</button>
            <button type="submit" class="btn btn-primary disabled" wire:loading.remove wire:dirty.class.remove="disabled">Save</button>
            <button class="btn btn-primary px-5" wire:loading>
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
        </div>
    </form>
    @script
        <script>
            $wire.on('load-defaults', () => {
                setTimeout(() => {
                    const country = document.getElementById('country');
                    const city = document.getElementById('state');
                    country.value = $wire.country; // Set your desired default value
                    const event = new Event('change', { bubbles: true });
                    country.dispatchEvent(event);
                    city.value = $wire.city; // Set your desired default value
                }, 1000);
            });
        </script>
    @endscript
</div>
