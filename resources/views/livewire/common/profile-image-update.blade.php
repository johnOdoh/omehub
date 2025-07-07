<form wire:submit="save" method="POST">
    <div class="text-center" x-data="{ showEdit: false, image: $wire.entangle('image').live }">
        @if (!$profile->logo && !$image)
            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto" style="width: 110px; height: 110px; font-size: 1.5rem;">{{ $user->initials() }}</div>
        @else
            <div>
                <img alt="{{ $user->name }}" src="{{ $image ? $image->temporaryUrl() : asset('storage/'.$profile->logo).'?v='.rand() }}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
            </div>
        @endif
        <div class="mt-2 w-75 mx-auto" x-show="showEdit">
            <div class="input-group">
                <input type="file" class="form-control form-control-sm" accept="image/*" wire:model="image">
                <button type="submit" class="btn btn-primary btn-sm" {{ $image ? '' : 'disabled' }} wire:loading.remove>Save</button>
                <button type="button" class="btn btn-primary btn-sm" disabled wire:loading>
                    <div class="spinner-border spinner-border-sm text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
            </div>
            @error('image')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        <div x-show="!showEdit"><small><a href="#" wire:click.prevent @click="showEdit = true">Edit</a></small></div>
        <div x-show="showEdit"><small><a href="#" wire:click.prevent @click="showEdit = false, image = null">Cancel</a></small></div>
        @if (session('image')) <span x-show="notify('Profile Image Updated')"></span> @endif
    </div>
</form>
{{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}

