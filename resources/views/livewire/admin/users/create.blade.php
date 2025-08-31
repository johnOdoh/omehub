<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Create Partner</h1>
    @if (session('created')) <span x-show="notify('{{ session('created') }}')"></span> @endif
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="create">
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control" wire:model="name" required>
                            @error('name')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company Email</label>
                            <input type="email" class="form-control" wire:model="email" required>
                            @error('email')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select class="form-select" wire:model="role" required>
                                <option value="">Select...</option>
                                <option value="Financial Partner">Financial Partner</option>
                                <option value="Sustainability Partner">Sustainability Partner</option>
                            </select>
                            @error('role')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" wire:loading.remove>Create</button>
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
</div>
