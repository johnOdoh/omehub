<div class="card">
    <div class="card-body">
        <h5 class="card-title">Password</h5>
        @if (session('password'))
            <div class="alert alert-primary alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-icon">
                    <i class="fa fa-fw fa-check"></i>
                </div>
                <div class="alert-message">
                    Password Updated Successfully
                </div>
            </div>
        @endif
        <form wire:submit="update_password">
            <div class="mb-3">
                <label class="form-label" for="inputPasswordCurrent">Current password</label>
                <input type="password" class="form-control" id="inputPasswordCurrent" wire:model="current_password">
                @error('current_password')
                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputPasswordNew">New password</label>
                <input type="password" class="form-control" id="inputPasswordNew" wire:model="password">
                @error('password')
                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputPasswordNew2">Confirm password</label>
                <input type="password" class="form-control" id="inputPasswordNew2" wire:model="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary" wire:loading.remove>Update Password</button>
            <button type="button" class="btn btn-primary" disabled wire:loading>
                <span>Updating</span>
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
        </form>
    </div>
</div>
