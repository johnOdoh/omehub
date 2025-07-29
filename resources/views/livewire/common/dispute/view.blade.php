<div class="container-fluid p-0">
    <p class="fw-bold text-secondary"><a href="#" wire:click.prevent="$parent.back" class="text-decoration-none">< Back</a></p>
    <div class="card">
        <div class="row g-0">
            <div class="col-12">
                <div class="py-2 px-3 border-bottom">
                    <div class="d-flex align-items-center py-1">
                        <span class="flex-grow-1 ps-3">
                            <div class="fw-bold">{{ $claim->subject }}</div>
                            <div class="text-light small text-capitalize badge bg-{{ $claim->status == 'ongoing' ? 'primary' : 'success' }}">{{ $claim->status }}</div>
                        </span>
                        <div class="d-flex align-items-center ms-3">
                            <span>
                                <div>Chat Turn</div>
                                <div class="text-light small text-capitalize badge bg-{{ $claim->chat == 'closed' ? 'danger' : 'info' }}"><em>{{ $claim->chat }}</em></div>
                            </span>
                            @if ($claim->status == 'ongoing' && auth()->user()->role == 'Admin')
                                <div class="dropdown position-relative ms-3 p-3 pt-0">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" wire:click.prevent='chat("closed")'>Close Chat</a>
                                        <a class="dropdown-item" wire:click.prevent='chat("complainant")'>Open for Complainant</a>
                                        <a class="dropdown-item" wire:click.prevent='chat("defendant")'>Open for Defendant</a>
                                        <a class="dropdown-item" wire:click.prevent='chat("both")'>Open for both</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" wire:click.prevent='resolve' wire:confirm='Are you sure you want to mark this dispute as resolved?'>Mark Dispute as Resolved</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="chat-messages p-4">
                        <div class="chat-message-left pb-4">
                            <div class="mx-1">
                                @if ($claim->user->profile()->logo)
                                    <img src="{{ asset('storage/'.$claim->user->profile()->logo) }}" class="rounded-circle d-flex mx-auto" alt="{{ $claim->user->name }}" width="40" height="40">
                                @else
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto" style="width: 40px; height: 40px; font-size: 1rem;">{{ $claim->user->initials() }}</div>
                                @endif
                                <div class="text-muted small text-nowrap mt-2">{{ $claim->created_at->diffForHumans() }}</div>
                            </div>
                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                <div class="fw-bold mb-1">{{ $claim->user->name }} <small class="text-muted"><em>(complainant)</em></small></div>
                                {!! $claim->body !!}
                                <div class="d-flex gap-2">
                                    @foreach ($claim->attachments as $attachment)
                                        <a href="{{ asset('storage/'.$attachment) }}" target="_blank">Attachment {{ $loop->iteration }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @foreach ($claim->replies as $reply)
                            <div class="chat-message-{{ $reply->user_id == $claim->defendant_id ? 'right' : 'left' }} pb-4">
                                <div class="mx-1">
                                    @if ($reply->user->profile()->logo)
                                        <img src="{{ asset('storage/'.$reply->user->profile()->logo) }}" class="rounded-circle d-flex mx-auto" alt="{{ $reply->user->name }}" width="40" height="40">
                                    @else
                                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto" style="width: 40px; height: 40px; font-size: 1rem;">{{ $reply->user->initials() }}</div>
                                    @endif
                                    <div class="text-muted small text-nowrap mt-2">{{ $reply->created_at->diffForHumans() }}</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="fw-bold mb-1">{{ $reply->user->name }} <small class="text-muted"><em>({{ $reply->user_id == $claim->defendant_id ? 'defendant' : ($reply->user_id == $claim->user_id ? 'complainant' : 'admin') }})</em></small></div>
                                    {!! $reply->body !!}
                                    <div class="d-flex gap-2">
                                        @foreach ($reply->attachments as $attachment)
                                            <a href="{{ asset('storage/'.$attachment) }}" target="_blank">Attachment {{ $loop->iteration }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if (auth()->user()->role == 'Admin' || $claim->chat == 'both' || ($claim->chat == 'defendant' && auth()->user()->id == $claim->defendant_id) || ($claim->chat == 'complainant' && auth()->user()->id == $claim->user_id))
                    <div class="flex-grow-0 py-3 px-4 border-top">
                        <form wire:submit.prevent="reply">
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
                            <div class="my-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        Attachment <small><em>(Must be image(s). You can select up to 3 files.)</em></small>
                                    </label>
                                    <input type="file" class="form-control" wire:model="attachment" accept="image/*" multiple>
                                </div>
                                @error('attachment')
                                    <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" wire:loading.remove>Submit</button>
                                    <button class="btn btn-primary px-5" wire:loading>
                                        <div class="spinner-border spinner-border-sm text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
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
                    placeholder: 'Respond to claim...',
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
