<div class="container-fluid p-0">
    <div class="card">
        <div class="card-header pb-0">
            <h5 class="card-title mb-0">Generate Insurance Payment Invoice</h5>
        </div>
        <hr class="mb-0">
        <div class="card-body">
            <form wire:submit="generate" wire:confirm='Do you confirm that the entered details are correct? You will not be able to change it later!' class="p-0">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label fw-bold">Bank Name</label>
                        <input type="text" class="form-control" placeholder="Bank Name" required wire:model="name">
                    </div>
                    @error('name')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
                <div class="my-3">
                    <div class="form-group">
                        <label class="form-label fw-bold">Bank Address <em class="small">optional</em></label>
                        <input type="text" class="form-control" placeholder="Bank Address" wire:model="address">
                    </div>
                    @error('address')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
                <div class="my-3">
                    <div class="form-group">
                        <label class="form-label fw-bold">Bank Swift Code/BIC</label>
                        <input type="number" class="form-control" placeholder="Swift/BIC" required wire:model="swift">
                    </div>
                    @error('swift')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
                <div class="my-3">
                    <div class="form-group">
                        <label class="form-label fw-bold">Account Number</label>
                        <input type="number" class="form-control" placeholder="Account Number" required wire:model="number">
                    </div>
                    @error('number')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
                <div class="my-3">
                    <div class="form-group">
                        <label class="form-label fw-bold">Invoice Due Date</label>
                        <input type="date" class="form-control" required wire:model="date">
                    </div>
                    @error('date')
                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                    @enderror
                </div>
                <div class="text-end my-3">
                    <button type="button" class="btn btn-outline-primary me-1" wire:click="$parent.$toggle('generate')" wire:loading.remove>Cancel</button>
                    <button type="submit" class="btn btn-primary" wire:loading.remove>Submit</button>
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
