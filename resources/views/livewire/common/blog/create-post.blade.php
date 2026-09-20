<div class="container-fluid p-0">
    <!-- Header Section with Breadcrumb -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-7">
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" wire:navigate>Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.bulletin.list', ['loc' => $loc]) }}" wire:navigate>{{ $loc == 'ad' ? 'Advertisements' : 'Bulletin' }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $edit ? 'Edit' : 'Create' }}</li>
                </ol>
            </nav> --}}
            <h1 class="h3 d-inline align-middle fw-bold">
                {{ $edit ? 'Edit ' . ($loc == 'ad' ? 'Advertisement' : 'Post') : 'Create New ' . ($loc == 'ad' ? 'Advertisement' : 'Post') }}
            </h1>
            <p class="text-muted mb-0 mt-1">
                {{ $edit ? 'Update your content and submit changes for editorial review.' : 'Publish industry insights, maritime updates, or verified commercial announcements.' }}
            </p>
        </div>
        <div class="col-md-5 text-md-end mt-3 mt-md-0">
            <a href="{{ route('user.bulletin.list', ['loc' => $loc]) }}" class="btn btn-outline-secondary btn-sm d-inline-flex align-items-center shadow-sm" wire:navigate>
                <i class="align-middle me-1" data-feather="arrow-left"></i>
                <span>Back to {{ $loc == 'ad' ? 'Ads' : 'Posts' }}</span>
            </a>
        </div>
    </div>

    <!-- Feedback & Error Alerts -->
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible shadow-sm fade show" role="alert">
            <div class="d-flex align-items-center">
                <i class="align-middle me-2" data-feather="alert-circle"></i>
                <div>{{ session('error') }}</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-dismissible shadow-sm fade show" role="alert">
            <div class="d-flex align-items-center">
                <i class="align-middle me-2" data-feather="check-circle"></i>
                <div>{{ session('success') }}</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <span x-show="notify('{{ session('success') }}')"></span>
    @endif

    @if (true)
        <!-- Review Notice Banner -->
        <div class="alert alert-info alert-dismissible shadow-sm border-0 mb-4" role="alert">
            <div class="d-flex align-items-start p-3">
                <div class="me-3 mt-1">
                    <i class="align-middle" data-feather="info"></i>
                </div>
                <div class="flex-grow-1">
                    <strong class="d-block mb-1">Editorial Guidelines & Review Notice</strong>
                    <div class="small">
                        All submissions are subject to review by the OmeHub compliance and editorial team. Please ensure content complies with our
                        <a href="{{ route('terms') }}" target="_blank" class="alert-link text-decoration-underline">Terms & Conditions</a> and professional posting standards.
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!-- User Verification Warnings -->
        @if (!auth()->user()->profile()->exists())
            <div class="alert alert-warning alert-dismissible shadow-sm mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="align-middle me-2" data-feather="alert-triangle"></i>
                    <div>
                        <strong>Incomplete Profile:</strong> You must complete your account profile before submitting posts.
                        <a href="{{ route('user.profile') }}" class="alert-link fw-semibold" wire:navigate>Complete your profile here</a>.
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (!auth()->user()->profile->is_verified)
            <div class="alert alert-warning alert-dismissible shadow-sm mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="align-middle me-2" data-feather="clock"></i>
                    <div>
                        <strong>Verification Pending:</strong> Your corporate credentials are currently being reviewed. Posting capabilities will unlock immediately upon admin verification.
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($loc == 'blog')
            <!-- BLOG POST FORM -->
            <form wire:submit="createPost">
                <div class="row g-4">
                    <!-- Left / Primary Column (Content) -->
                    <div class="col-12 col-lg-8">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-transparent py-3 border-bottom">
                                <h5 class="card-title mb-0 fw-bold">Article Details</h5>
                            </div>
                            <div class="card-body">
                                <!-- Title Field -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">
                                        Post Title <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           class="form-control form-control-lg @error('title') is-invalid @enderror"
                                           placeholder="e.g. 2026 West African Port Automation: Streamlining Pre-Arrival Customs"
                                           wire:model="title"
                                           required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text small text-muted">A compelling, descriptive headline for your article (up to 191 characters).</div>
                                </div>

                                <!-- Rich Text Content Editor -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        Post Content <span class="text-danger">*</span>
                                    </label>
                                    <div class="border rounded @error('body') border-danger @enderror" wire:ignore>
                                        <div id="quill-toolbar" class="border-bottom bg-light">
                                            <span class="ql-formats">
                                                <select class="ql-header" title="Heading Level">
                                                    <option value="" selected>Normal Text</option>
                                                    <option value="1">Heading 1</option>
                                                    <option value="2">Heading 2</option>
                                                    <option value="3">Heading 3</option>
                                                </select>
                                                <select class="ql-size" title="Font Size"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-bold" title="Bold"></button>
                                                <button class="ql-italic" title="Italic"></button>
                                                <button class="ql-underline" title="Underline"></button>
                                                <button class="ql-strike" title="Strikethrough"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-blockquote" title="Blockquote"></button>
                                                <button class="ql-code-block" title="Code Block"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-list" value="ordered" title="Numbered List"></button>
                                                <button class="ql-list" value="bullet" title="Bullet List"></button>
                                                <button class="ql-indent" value="-1" title="Decrease Indent"></button>
                                                <button class="ql-indent" value="+1" title="Increase Indent"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <select class="ql-align" title="Text Alignment"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-link" title="Insert Link"></button>
                                                <button class="ql-clean" title="Clear Formatting"></button>
                                            </span>
                                        </div>
                                        <div id="quill-editor" style="min-height: 320px; font-size: 15px; line-height: 1.7;">{!! $body !!}</div>
                                    </div>
                                    <input type="hidden" wire:model="body" required>
                                    @error('body')
                                        <div class="text-danger small mt-1"><i>{{ $message }}</i></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Media, Taxonomy, Publishing) -->
                    <div class="col-12 col-lg-4">
                        <!-- Cover Image Card -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-transparent py-3 border-bottom d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0 fw-bold">Cover Image</h5>
                                @if ($edit)
                                    <span class="badge bg-light text-muted border small">Optional on edit</span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger small">Required</span>
                                @endif
                            </div>
                            <div class="card-body">
                                <!-- Image Preview Section -->
                                <div class="mb-3 text-center">
                                    @if ($file)
                                        <div class="position-relative mb-2">
                                            <img src="{{ $file->temporaryUrl() }}" alt="Preview" class="img-fluid rounded border w-100 shadow-sm" style="max-height: 190px; object-fit: cover;">
                                            <span class="position-absolute top-0 start-0 m-2 badge bg-primary shadow-sm">New Selection</span>
                                        </div>
                                    @elseif ($edit && $post && $post->file)
                                        <div class="position-relative mb-2">
                                            <img src="{{ asset('storage/' . $post->file) }}" alt="{{ $post->title }}" class="img-fluid rounded border w-100 shadow-sm" style="max-height: 190px; object-fit: cover;">
                                            <span class="position-absolute top-0 start-0 m-2 badge bg-dark shadow-sm">Current Cover</span>
                                        </div>
                                        <p class="text-muted small mb-2">Leave blank to retain current image, or select a new file below.</p>
                                    @else
                                        <div class="border rounded p-4 text-muted bg-light mb-2">
                                            <i class="align-middle mb-2" data-feather="image" style="width: 36px; height: 36px;"></i>
                                            <div class="small fw-semibold">No image selected</div>
                                            <div class="small text-muted">Supports JPG, PNG (Max 5MB)</div>
                                        </div>
                                    @endif
                                </div>

                                <!-- File Input Control -->
                                <div class="mb-2">
                                    <input type="file"
                                           class="form-control form-control-sm @error('file') is-invalid @enderror"
                                           accept="image/jpeg,image/png,image/jpg"
                                           wire:model="file"
                                           {{ $edit ? '' : 'required' }}>
                                    @error('file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div wire:loading wire:target="file" class="text-primary small mt-2">
                                        <div class="spinner-border spinner-border-sm me-1" role="status"></div>
                                        <span>Processing image...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Taxonomy & Category Card -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-transparent py-3 border-bottom">
                                <h5 class="card-title mb-0 fw-bold">Classification</h5>
                            </div>
                            <div class="card-body">
                                <!-- Category -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('category') is-invalid @enderror"
                                           placeholder="e.g. Ports & Customs, Freight Logistics"
                                           maxlength="30"
                                           wire:model="category"
                                           required>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text small text-muted">Maximum 30 characters.</div>
                                </div>

                                <!-- Tags -->
                                <div class="mb-2">
                                    <label class="form-label fw-semibold">Tags <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('tags') is-invalid @enderror"
                                           placeholder="e.g. shipping, customs, clearance"
                                           wire:model="tags"
                                           required>
                                    @error('tags')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text small text-muted">Separate multiple tags with commas.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Publishing Actions Card -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                @if ($edit && $post)
                                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                        <span class="text-muted small">Current Status</span>
                                        <span class="badge text-capitalize px-2 py-1 bg-{{ $post->status == 'approved' ? 'success' : ($post->status == 'pending' ? 'warning' : 'danger') }}">
                                            {{ $post->status }}
                                        </span>
                                    </div>
                                @endif

                                <button type="submit"
                                        class="btn btn-primary w-100 py-2 d-inline-flex align-items-center justify-content-center fw-semibold shadow-sm mb-2"
                                        @if (!auth()->user()->profile || !auth()->user()->profile->is_verified) disabled @endif
                                        wire:loading.remove
                                        wire:target="file, createPost">
                                    <i class="align-middle me-1" data-feather="{{ $edit ? 'save' : 'send' }}"></i>
                                    <span>{{ $edit ? 'Save Changes' : 'Publish Article' }}</span>
                                </button>

                                <button class="btn btn-primary w-100 py-2" wire:loading wire:target="file, createPost" disabled>
                                    <div class="spinner-border spinner-border-sm text-light me-1" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span>{{ $edit ? 'Saving changes...' : 'Publishing...' }}</span>
                                </button>

                                <a href="{{ route('user.bulletin.list', ['loc' => 'blog']) }}" class="btn btn-outline-secondary w-100 btn-sm" wire:navigate>
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <!-- ADVERTISEMENT FORM -->
            <form wire:submit="createAd">
                <div class="row g-4">
                    <!-- Left Column (Ad Content) -->
                    <div class="col-12 col-lg-8">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-transparent py-3 border-bottom">
                                <h5 class="card-title mb-0 fw-bold">Advertisement Content</h5>
                            </div>
                            <div class="card-body">
                                <!-- Title -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Ad Campaign Title <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control form-control-lg @error('title') is-invalid @enderror"
                                           placeholder="e.g. Direct Air Cargo Charters from Frankfurt to Lagos"
                                           wire:model="title"
                                           required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Brief Description -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">External Url <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control @error('url') is-invalid @enderror"
                                              placeholder="eg: https://www.example.com"
                                              wire:model="url">
                                    @error('url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text small text-muted">The link to your website or resource.</div>
                                </div>

                                <!-- Rich Content Body -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Full Promotional Details <span class="text-danger">*</span></label>
                                    <div class="border rounded @error('body') border-danger @enderror" wire:ignore>
                                        <div id="quill-toolbar" class="border-bottom bg-light">
                                            {{-- <span class="ql-formats">
                                                <select class="ql-header" title="Heading Level">
                                                    <option value="" selected>Normal</option>
                                                    <option value="2">Heading</option>
                                                    <option value="3">Subheading</option>
                                                </select>
                                                <select class="ql-size" title="Size"></select>
                                            </span> --}}
                                            <span class="ql-formats">
                                                <button class="ql-bold" title="Bold"></button>
                                                <button class="ql-italic" title="Italic"></button>
                                                <button class="ql-underline" title="Underline"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-list" value="ordered" title="Numbered"></button>
                                                <button class="ql-list" value="bullet" title="Bullet"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <select class="ql-align" title="Align"></select>
                                                {{-- <button class="ql-link" title="Link"></button> --}}
                                                <button class="ql-clean" title="Clear"></button>
                                            </span>
                                        </div>
                                        <div id="quill-editor" style="min-height: 150px; font-size: 15px; line-height: 1.7;">{!! $body !!}</div>
                                    </div>
                                    <input type="hidden" wire:model="body" required>
                                    @error('body')
                                        <div class="text-danger small mt-1"><i>{{ $message }}</i></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Media & Actions) -->
                    <div class="col-12 col-lg-4">
                        <!-- Media Card -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-transparent py-3 border-bottom d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0 fw-bold">Promotional Media</h5>
                                @if ($edit)
                                    <span class="badge bg-light text-muted border small">Optional on edit</span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger small">Required</span>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="mb-3 text-center">
                                    @if ($file)
                                        <div class="position-relative mb-2">
                                            @if (str_starts_with($file->getMimeType(), 'video/'))
                                                <div class="p-3 bg-dark text-white rounded border">
                                                    <i class="align-middle mb-1" data-feather="video"></i>
                                                    <div class="small fw-semibold">Video file staged</div>
                                                </div>
                                            @else
                                                <img src="{{ $file->temporaryUrl() }}" alt="Preview" class="img-fluid rounded border w-100 shadow-sm" style="max-height: 190px; object-fit: cover;">
                                            @endif
                                            <span class="badge bg-primary mt-2">New Media Selected</span>
                                        </div>
                                    @elseif ($edit && $ad && $ad->file)
                                        <div class="position-relative mb-2">
                                            <img src="{{ asset('storage/' . $ad->file) }}" alt="{{ $ad->title }}" class="img-fluid rounded border w-100 shadow-sm" style="max-height: 190px; object-fit: cover;">
                                            <span class="badge bg-dark mt-1">Current Media</span>
                                        </div>
                                        <p class="text-muted small mb-2">Leave blank to keep existing media or select new file.</p>
                                    @else
                                        <div class="border rounded p-4 text-muted bg-light mb-2">
                                            <i class="align-middle mb-2" data-feather="film" style="width: 36px; height: 36px;"></i>
                                            <div class="small fw-semibold">No media attached</div>
                                            {{-- <div class="small text-muted">Supports Images or MP4/WebM (Max 20MB)</div> --}}
                                            <div class="small text-muted">Supports Images (Max 20MB)</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="mb-2">
                                    <input type="file"
                                           class="form-control form-control-sm @error('file') is-invalid @enderror"
                                           {{-- accept="image/*,video/mp4,video/webm" --}}
                                           accept="image/*"
                                           wire:model="file"
                                           {{ $edit ? '' : 'required' }}>
                                    @error('file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div wire:loading wire:target="file" class="text-primary small mt-2">
                                        <div class="spinner-border spinner-border-sm me-1" role="status"></div>
                                        <span>Processing file...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Taxonomy & Category Card -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-transparent py-3 border-bottom">
                                <h5 class="card-title mb-0 fw-bold">Classification</h5>
                            </div>
                            <div class="card-body">
                                <!-- Category -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('category') is-invalid @enderror"
                                           placeholder="e.g. Shipping, Education, Lifestyle"
                                           maxlength="30"
                                           wire:model="category"
                                           required>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text small text-muted">Maximum 30 characters.</div>
                                </div>

                                <!-- Tags -->
                                <div class="mb-2">
                                    <label class="form-label fw-semibold">Call to Action button <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('cta') is-invalid @enderror"
                                           placeholder="e.g. Learn more, Book now, Contact us"
                                           wire:model="cta"
                                           required>
                                    @error('cta')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Publishing Card -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                @if ($edit && $ad)
                                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                        <span class="text-muted small">Status</span>
                                        <span class="badge text-capitalize px-2 py-1 bg-{{ $ad->status == 'approved' ? 'success' : ($ad->status == 'pending' ? 'warning' : 'danger') }}">
                                            {{ $ad->status }}
                                        </span>
                                    </div>
                                @endif

                                <button type="submit"
                                        class="btn btn-primary w-100 py-2 d-inline-flex align-items-center justify-content-center fw-semibold shadow-sm mb-2"
                                        @if (!auth()->user()->profile?->is_verified) disabled @endif
                                        wire:loading.remove
                                        wire:target="file, createAd">
                                    <i class="align-middle me-1" data-feather="{{ $edit ? 'save' : 'send' }}"></i>
                                    <span>{{ $edit ? 'Save Changes' : 'Launch Advertisement' }}</span>
                                </button>

                                <button class="btn btn-primary w-100 py-2" wire:loading wire:target="file, createAd" disabled>
                                    <div class="spinner-border spinner-border-sm text-light me-1" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span>{{ $edit ? 'Saving changes...' : 'Publishing...' }}</span>
                                </button>

                                <a href="{{ route('user.bulletin.list', ['loc' => 'ad']) }}" class="btn btn-outline-secondary w-100 btn-sm" wire:navigate>
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endif

        @script
            <script>
                setTimeout(() => {
                    const editorContainer = document.querySelector('#quill-editor');
                    if (editorContainer && !editorContainer.classList.contains('ql-container')) {
                        try {
                            const Parchment = Quill.import("parchment");
                            const Header = Quill.import("formats/header");

                            class ExtendedHeader extends Header {}
                            ExtendedHeader.allowed = [1, 2, 3, 4, 5, 6];
                            Quill.register(ExtendedHeader, true);
                        } catch (e) {
                            // Header already registered
                        }

                        var quill = new Quill('#quill-editor', {
                            modules: {
                                toolbar: '#quill-toolbar'
                            },
                            placeholder: 'Draft your content here...',
                            theme: 'snow'
                        });

                        quill.on('text-change', function () {
                            @this.set('body', quill.root.innerHTML);
                        });

                        $wire.on('clear', () => {
                            quill.root.innerHTML = '';
                        });
                    }

                    if (typeof feather !== 'undefined') {
                        feather.replace();
                    }
                }, 300);
            </script>
        @endscript

        @if ($paid == 1)
            @script
                <script>
                    $wire.dispatch('paid');
                </script>
            @endscript
        @endif
    @else
        <!-- Pricing Subscription Gate (if enabled in future) -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center fw-bold">Our Bulletin Section is Currently Locked</h1>
                <p class="lead text-center mb-4 text-muted">Unlock unlimited postings and verified ad campaigns with transparent subscription plans.</p>
                <div class="row py-4 justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="card text-center h-100 border-0 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="mb-4">
                                    <h5 class="fw-bold mb-2">Monthly</h5>
                                    <span class="display-5 fw-bold">$5</span><span class="text-muted">/month</span>
                                </div>
                                <h6 class="fw-semibold text-start mb-3">Features included:</h6>
                                <ul class="list-unstyled text-start mb-4">
                                    <li class="mb-2"><i class="align-middle me-2 text-success" data-feather="check"></i> Access to Blog and Ads</li>
                                    <li class="mb-2"><i class="align-middle me-2 text-success" data-feather="check"></i> Unlimited Posts</li>
                                    <li class="mb-2"><i class="align-middle me-2 text-success" data-feather="check"></i> Priority approvals</li>
                                </ul>
                                <div class="mt-auto">
                                    <button class="btn btn-outline-primary w-100" onclick="makePayment('monthly', 5)">Select Plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-center h-100 border-primary border-2 shadow-sm position-relative">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <span class="badge bg-primary px-3 py-2 shadow-sm">Most Popular</span>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <div class="mb-4 mt-2">
                                    <h5 class="fw-bold mb-2">Annual</h5>
                                    <span class="display-5 fw-bold text-primary">$50</span><span class="text-muted">/year</span>
                                    <div class="text-success small fw-semibold mt-1">17% savings</div>
                                </div>
                                <h6 class="fw-semibold text-start mb-3">Features included:</h6>
                                <ul class="list-unstyled text-start mb-4">
                                    <li class="mb-2"><i class="align-middle me-2 text-success" data-feather="check"></i> Access to Blog and Ads</li>
                                    <li class="mb-2"><i class="align-middle me-2 text-success" data-feather="check"></i> Unlimited Posts</li>
                                    <li class="mb-2"><i class="align-middle me-2 text-success" data-feather="check"></i> Fast-track editorial approvals</li>
                                </ul>
                                <div class="mt-auto">
                                    <button class="btn btn-primary w-100" onclick="makePayment('annual', 50)">Select Plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:100000;" id="loadingOverlay" class="d-none">
            <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <script>
            function makePayment(plan, amount) {
                document.querySelector('#loadingOverlay').classList.remove('d-none');
                FlutterwaveCheckout({
                    public_key: '{{ env('FLUTTERWAVE_PUBLIC_KEY') }}',
                    tx_ref: '{{ uniqid('ome_', true) }}',
                    amount: amount,
                    currency: 'USD',
                    payment_options: 'card',
                    redirect_url: '{{ route('payment.advert') }}',
                    customer: {
                        email: '{{ auth()->user()->email }}',
                        name: '{{ auth()->user()->name }}',
                    },
                    customizations: {
                        title: '{{ config('app.name') }}',
                        description: '{{ config('app.name') }} Bulletin section fee',
                        logo: '{{ asset('assets/img/favicon.png') }}',
                    },
                    meta: {
                        plan: plan,
                        loc: '{{ $loc }}'
                    }
                });
            }
        </script>
    @endif
</div>
