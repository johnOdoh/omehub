<form wire:submit="save" method="POST">
    <div class="text-left">
        <img alt="{{ $user->last_name }}" src="{{ $image ? $image->temporaryUrl() : asset('storage/'.$user->image).'?v='.rand() }}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
        <div class="mt-2">
            <small><i>*For best results, use an image at least 128px by 128px in .jpg, .jpeg or .png format</i></small>
            <input type="file" class="form-control" accept="image/*" wire:model="image">
            @error('image')
                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
            @enderror
        </div>
        @if (session('image')) <span x-show="notify('Profile Image Updated')"></span> @endif
        <div class="mt-2">
            <button type="submit" class="btn btn-primary" wire:loading.remove><i class="fas fa-upload"></i> Save Image</button>
            <button type="button" class="btn btn-primary" disabled wire:loading>
                <span>Updating</span>
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
        </div>
    </div>
</form>
{{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}

