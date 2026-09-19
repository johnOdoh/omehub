<div class="container-fluid p-0">
    <!-- Header & Navigation -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-7">
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" wire:navigate>Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.bulletin.list', ['loc' => $post->tags ? 'blog' : 'ad']) }}" wire:navigate>{{ $post->tags ? 'Bulletin' : 'Advertisements' }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->title, 35) }}</li>
                </ol>
            </nav> --}}
            <h1 class="h3 d-inline align-middle fw-bold">{{ $loc == 'blog' ? 'Post' : 'Ad' }} Details</h1>
        </div>
        <div class="col-md-5 text-md-end mt-3 mt-md-0 d-flex justify-content-md-end gap-2">
            <a href="{{ route('user.bulletin.list', ['loc' => $loc ]) }}" class="btn btn-outline-secondary btn-sm d-inline-flex align-items-center shadow-sm" wire:navigate>
                <i class="align-middle me-1" data-feather="arrow-left"></i>
                <span>Back to List</span>
            </a>
            @if ($post->user_id === auth()->id())
                <a href="{{ route('user.bulletin.edit', ['post' => $post->id, 'loc' => $loc]) }}" class="btn btn-primary btn-sm d-inline-flex align-items-center shadow-sm" wire:navigate>
                    <i class="align-middle me-1" data-feather="edit-2"></i>
                    <span>Edit {{ $loc == 'blog' ? 'Post' : 'Ad' }}</span>
                </a>
            @endif
        </div>
    </div>

    <!-- Notification Feedback -->
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

    <div class="row g-4">
        <!-- Main Article Container (Left Column) -->
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm overflow-hidden">
                <!-- Cover Media -->
                @if ($post->is_video)
                    <div class="ratio ratio-16x9 bg-dark">
                        <video controls class="w-100 h-100">
                            <source src="{{ asset('storage/' . $post->file) }}">
                            Your browser does not support HTML5 video streaming.
                        </video>
                    </div>
                @elseif ($post->file)
                    <div class="w-100 bg-light text-center" style="max-height: 440px; overflow: hidden;">
                        <img class="img-fluid w-100"
                             src="{{ asset('storage/' . $post->file) }}"
                             alt="{{ $post->title }}"
                             style="object-fit: cover; max-height: 440px;">
                    </div>
                @endif

                <div class="card-body p-4 p-md-5">
                    <!-- Taxonomy & Metadata Header -->
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        @if ($post->category)
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 fw-semibold">
                                {{ $post->category }}
                            </span>
                        @endif
                        <span class="text-muted small d-inline-flex align-items-center ms-1">
                            <i class="align-middle me-1" data-feather="calendar" style="width: 14px; height: 14px;"></i>
                            {{ $post->created_at->format('F d, Y') }}
                        </span>
                        <span class="text-muted small">&bull;</span>
                        <span class="text-muted small d-inline-flex align-items-center">
                            <i class="align-middle me-1" data-feather="clock" style="width: 14px; height: 14px;"></i>
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </div>

                    <!-- Article Headline -->
                    <h1 class="h2 fw-bold text-dark mb-4 lh-sm">
                        {{ $post->title }}
                    </h1>

                    <hr class="my-4">

                    <!-- Rendered HTML Content -->
                    <div class="post-rendered-content text-dark" style="font-size: 1.05rem; line-height: 1.8;">
                        {!! $post->body !!}
                    </div>

                    <!-- Article Tags Footer -->
                    @if (!empty($post->tags))
                        <div class="mt-5 pt-4 border-top">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <span class="text-muted fw-semibold small text-uppercase me-1">
                                    <i class="align-middle me-1" data-feather="tag" style="width: 14px; height: 14px;"></i> Tags:
                                </span>
                                @foreach (explode(',', $post->tags) as $tag)
                                    @if (trim($tag))
                                        <span class="badge bg-light text-dark border px-2 py-1 small">
                                            {{ trim($tag) }}
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Sidebar / Metadata Column (Right Column) -->
        <div class="col-12 col-lg-4">
            <!-- Publishing Status Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-transparent py-3 border-bottom">
                    <h5 class="card-title mb-0 fw-bold">Publication Status</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        @if ($post->status === 'approved')
                            <div class="stat text-success bg-success-subtle rounded-circle p-2 me-3">
                                <i class="align-middle" data-feather="check-circle" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-success">Approved & Live</h6>
                                <small class="text-muted">Visible across the OmeHub public bulletin.</small>
                            </div>
                        @elseif ($post->status === 'pending')
                            <div class="stat text-warning bg-warning-subtle rounded-circle p-2 me-3">
                                <i class="align-middle" data-feather="clock" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-warning">Pending Review</h6>
                                <small class="text-muted">Awaiting administrator verification.</small>
                            </div>
                        @else
                            <div class="stat text-danger bg-danger-subtle rounded-circle p-2 me-3">
                                <i class="align-middle" data-feather="alert-triangle" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-danger">Changes Requested</h6>
                                <small class="text-muted">Please edit and update this submission.</small>
                            </div>
                        @endif
                    </div>

                    @if ($post->status === 'approved')
                        @if ($loc == 'blog')
                            <a href="{{ route('public.blog', $post->slug) }}" target="_blank" class="btn btn-outline-primary btn-sm w-100 d-inline-flex align-items-center justify-content-center mt-2">
                                <i class="align-middle me-1" data-feather="external-link"></i>
                                <span>View Public Page</span>
                            </a>
                        @endif
                    @elseif ($post->user_id === auth()->id() || auth()->user()->role == 'Admin')
                        <a href="{{ route('user.bulletin.edit', ['post' => $post->id, 'loc' => $loc]) }}" class="btn btn-outline-primary btn-sm w-100 d-inline-flex align-items-center justify-content-center mt-2" wire:navigate>
                            <i class="align-middle me-1" data-feather="edit-2"></i>
                            <span>Edit Submission</span>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Post Meta Details Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-transparent py-3 border-bottom">
                    <h5 class="card-title mb-0 fw-bold">{{ $loc == 'blog' ? 'Post' : 'Ad' }} Information</h5>
                </div>
                <div class="card-body">
                    <dl class="row mb-0 small">
                        <dt class="col-5 text-muted">Author:</dt>
                        <dd class="col-7 fw-semibold text-dark">{{ $post->user?->name ?? 'N/A' }}</dd>

                        <dt class="col-5 text-muted">Category:</dt>
                        <dd class="col-7 text-dark">{{ $post->category }}</dd>

                        <dt class="col-5 text-muted">Format:</dt>
                        <dd class="col-7 text-dark">{{ $loc == 'blog' ? 'Blog Article' : 'Ad Campaign' }}</dd>

                        @if ($loc == 'ad')
                            <dt class="col-5 text-muted">CTA Button:</dt>
                            <dd class="col-7 text-dark">
                                <span class="py-1 px-2 badge bg-primary">{{ $post->cta }}</span>
                            </dd>

                            <dt class="col-5 text-muted">External URL:</dt>
                            <dd class="col-7 text-dark">
                                <a href="{{ $post->url }}" target="_blank" rel="noopener noreferrer">{{ $post->url }}</a>
                            </dd>
                        @endif
                        <dt class="col-5 text-muted">Submitted:</dt>
                        <dd class="col-7 text-dark">{{ $post->created_at->format('d M, Y \a\t h:i A') }}</dd>

                        <dt class="col-5 text-muted">Last Updated:</dt>
                        <dd class="col-7 text-dark">{{ $post->updated_at->format('d M, Y \a\t h:i A') }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    @script
        <script>
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        </script>
    @endscript
</div>
