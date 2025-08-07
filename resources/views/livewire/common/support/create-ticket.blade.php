<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3">Create Support Ticket</h1>
    </div>
    @if (session('success')) <span x-show="notify('Support Ticket Created')"></span> @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="send">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" required wire:model="subject">
                            </div>
                            @error('subject')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <textarea rows="3" class="form-control" placeholder="Your challenge.." required wire:model="message"></textarea>
                            @error('message')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="form-group">
                                <label class="form-label">
                                    Attachment <small><em>(Must be an image. Optional.)</em></small>
                                </label>
                                <input type="file" class="form-control" wire:model="attachment" accept="image/*">
                            </div>
                            @error('attachment')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" wire:loading.remove wire:target="send, attachment">Submit</button>
                                <button class="btn btn-primary px-5" wire:loading wire:target="send, attachment">
                                    <div class="spinner-border spinner-border-sm text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
