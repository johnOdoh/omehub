<div class="container-fluid p-0">
    <h1 class="h3 mb-3 text-center">Request Legal Advice</h1>
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <div class="alert-message d-flex">
                                <strong class="me-2"><i class="fa fa-check"></i></strong>
                                <div>Your Legal Advice request has been sent to our legal team. You will receive a response soon via your email. Cheers.</div>
                            </div>
                        </div>
                    @endif
                    <form wire:submit="send">
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" wire:model="subject" placeholder="The subject of the legal advice you need" required>
                            @error('subject')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Request</label>
                            <textarea rows="5" class="form-control" wire:model="message" placeholder="Your request" required></textarea>
                            @error('message')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" wire:loading.remove>Send</button>
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
