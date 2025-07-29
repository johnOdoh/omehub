<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3">{{ $post ? 'Edit' : 'Create' }} Post</h1>
    </div>
    @if (session('created')) <span x-show="notify('Post Successfully Created')"></span> @endif
    @if (session('updated')) <span x-show="notify('Post Successfully Updated')"></span> @endif
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-message d-flex">
            <strong class="me-2">Note:</strong>
            <div>Your post is subject to review by our team. We only accept posts that are relevant to our community.</div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="createPost">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title" aria-label="Title" required wire:model="title">
                            </div>
                            @error('title')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="form-group">
                                <label class="form-label">Description <i class="small">200 characters max</i></label>
                                <textarea rows="2" maxlength="200" class="form-control" placeholder="Briefly describe the content of your post. This will help readers find your post faster." wire:model="description" required></textarea>
                            </div>
                            @error('description')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="clearfix" wire:ignore>
                                <div id="quill-toolbar">
                                    <span class="ql-formats">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-strike"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <select class="ql-color"></select>
                                        <select class="ql-background"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-header" value="1"></button>
                                        <button class="ql-header" value="2"></button>
                                        <button class="ql-blockquote"></button>
                                        <button class="ql-code-block"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-direction" value="rtl"></button>
                                        <select class="ql-align"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                        <button class="ql-video"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-clean"></button>
                                    </span>
                                </div>
                                <div id="quill-editor">{!! $body !!}</div>
                            </div>
                            @error('body')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <input type="hidden" wire:model="body" required>
                        <div class="my-3">
                            <div class="form-group">
                                <label class="form-label">Tags</label>
                                <input type="text" class="form-control" placeholder="eg:shipping, delivery" required wire:model="tags">
                            </div>
                            @error('tags')
                                <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
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
                    placeholder: 'Compose an epic...',
                    theme: 'snow'
                });
                quill.on('text-change', function () {
                    @this.set('body', quill.root.innerHTML);
                });
            }, 500);
        </script>
    @endscript
</div>
