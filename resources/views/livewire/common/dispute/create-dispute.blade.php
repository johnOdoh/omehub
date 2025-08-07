<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3">Raise a Claim</h1>
    </div>
    @if (session('created')) <span x-show="notify('Claim Successfully Raised')"></span> @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (!auth()->user()->profile())
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <div class="alert-message d-flex">
                                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                                <div>You are yet to complete your profile. <a href="{{ route(auth()->user()->profileRoute()) }}" wire:navigate>Click here</a> to complete your profile to be able to enjoy our services.</div>
                            </div>
                        </div>
                    @elseif (!auth()->user()->profile()->is_verified)
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <div class="alert-message d-flex">
                                <strong class="me-2"><i class="fa fa-warning"></i></strong>
                                <div>Your documents are under review by our team. You will be notified when soon when your documents are approved.</div>
                            </div>
                        </div>
                    @endif
                    <form wire:submit="create">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" aria-label="Subject" required wire:model="subject">
                            </div>
                            @error('subject')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="clearfix" wire:ignore>
                                <div id="quill-toolbar">
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-link"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-clean"></button>
                                    </span>
                                </div>
                                <div id="quill-editor" style="height: 120px; overflow-y: auto;">{!! $body !!}</div>
                            </div>
                            @error('body')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <input type="hidden" wire:model="body" required>
                        <div class="my-3 position-relative">
                            <div class="form-group">
                                <label class="form-label">Defendant</label>
                                <input type="text" class="form-control" placeholder="Defendant" required wire:keyup="search($event.target.value)" wire:model="defendant">
                                @if ($suggestions)
                                    <ul class="dropdown-menu w-100" id="suggestionsDropdown" style="display: block;">
                                        @foreach ( $suggestions as $suggestion )
                                            <li><a class="dropdown-item" wire:click='select("{{ $suggestion }}")'>{{ $suggestion }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            @error('defendant')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                            {{-- <input type="text" class="form-control" id="searchInput" placeholder="Search..."> --}}
                        </div>
                        <div class="my-3">
                            <div class="form-group">
                                <label class="form-label">
                                    Attachment <small><em>(Must be image(s). You can select up to 3 files. Optional.)</em></small>
                                </label>
                                <input type="file" class="form-control" wire:model="attachment" accept="image/*" multiple>
                            </div>
                            @error('attachment')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile() || !auth()->user()->profile()->is_verified) disabled @endif wire:loading.remove wire:target="attachment, create, defendant">Submit</button>
                                <button class="btn btn-primary px-5" wire:loading wire:target="attachment, create, defendant">
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
    @script
        <script>
            setTimeout(() => {
                var quill = new Quill('#quill-editor', {
                    modules: {
                        toolbar: '#quill-toolbar'
                    },
                    placeholder: 'Describe your claim...',
                    theme: 'snow'
                });
                quill.on('text-change', function () {
                    @this.set('body', quill.root.innerHTML);
                });
                $wire.on('clear', () => {
                    quill.root.innerHTML = ''
                })
            }, 500);
        </script>
    @endscript
</div>
