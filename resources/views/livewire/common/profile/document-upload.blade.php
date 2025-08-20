<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Upload Verification Documents</h1>
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="save">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" wire:model="name" placeholder="Company Account Name" required>
                            @error('name')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" wire:model="number" placeholder="Company Account Number" required>
                            @error('number')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" wire:model="bank" placeholder="Company Bank Name" required>
                            @error('bank')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        @if ($user->role == 'Shipper' && $user->profile()->account_type == 'Personal')
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">
                                    Government Issued ID (Front)<small><em>(Must be an image)</em></small>
                                </label>
                                <input type="file" class="form-control" required wire:model="front" accept="image/*">
                                @error('front')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">
                                    Government Issued ID (Back - if applicable)<small><em>(Must be an image)</em></small>
                                </label>
                                <input type="file" class="form-control" wire:model="back" accept="image/*">
                                @error('back')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                        @else
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">
                                    Business registration document <small><em>(Must be a pdf)</em></small>
                                </label>
                                <input type="file" class="form-control" required wire:model="document" accept="application/pdf">
                                @error('document')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                        @endif
                        <div>
                            <button type="submit" class="btn btn-primary" wire:loading.remove wire:target="save, document, front, back">Submit</button>
                            <button class="btn btn-primary px-5" wire:loading>
                                <div class="spinner-border spinner-border-sm text-light" role="status" wire:target="save, document, front, back">
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
