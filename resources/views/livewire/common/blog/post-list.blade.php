<div class="container-fluid p-0">
    <!-- Header Section -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-7">
            <h1 class="h3 d-inline align-middle fw-bold">My {{ $loc == 'ad' ? 'Advertisements' : 'Blog Posts' }}</h1>
            <p class="text-muted mb-0 mt-1">Manage, edit, and monitor the publication status of your {{ $loc == 'ad' ? 'ads' : 'articles' }}.</p>
        </div>
        <div class="col-md-5 text-md-end mt-3 mt-md-0">
            <div class="btn-group me-2" role="group">
                <a href="{{ route('user.bulletin.list', ['loc' => 'blog']) }}" class="btn btn-sm {{ $loc != 'ad' ? 'btn-primary' : 'btn-outline-primary' }}" wire:navigate>
                    <i class="align-middle me-1" data-feather="file-text"></i> Posts
                </a>
                <a href="{{ route('user.bulletin.list', ['loc' => 'ad']) }}" class="btn btn-sm {{ $loc == 'ad' ? 'btn-primary' : 'btn-outline-primary' }}" wire:navigate>
                    <i class="align-middle me-1" data-feather="tv"></i> Ads
                </a>
            </div>
            <a href="{{ route('user.bulletin.create', ['loc' => $loc]) }}" class="btn btn-primary btn-sm d-inline-flex align-items-center shadow-sm" wire:navigate>
                <i class="align-middle me-1" data-feather="plus"></i>
                <span>Create {{ $loc == 'ad' ? 'Ad' : 'Post' }}</span>
            </a>
        </div>
    </div>

    <!-- Notification Messages -->
    @if (session('success'))
        <span x-show="notify('{{ session('success') }}')"></span>
        <div class="alert alert-success alert-dismissible shadow-sm fade show" role="alert">
            <div class="d-flex align-items-center p-3">
                <i class="align-middle me-2" data-feather="check-circle"></i>
                <div>{{ session('success') }}</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Stat Summary Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted text-uppercase fw-semibold small">Approved</span>
                            <h2 class="my-2 fw-bold text-dark">{{ $this->posts->where('status', 'approved')->count() }}</h2>
                            <small class="text-success d-inline-flex align-items-center">
                                <i class="align-middle me-1" data-feather="check"></i> Live on platform
                            </small>
                        </div>
                        <div class="stat text-success bg-success-subtle rounded-circle p-3">
                            <i class="align-middle" data-feather="check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted text-uppercase fw-semibold small">Pending Review</span>
                            <h2 class="my-2 fw-bold text-dark">{{ $this->posts->where('status', 'pending')->count() }}</h2>
                            <small class="text-warning d-inline-flex align-items-center">
                                <i class="align-middle me-1" data-feather="clock"></i> Under review
                            </small>
                        </div>
                        <div class="stat text-warning bg-warning-subtle rounded-circle p-3">
                            <i class="align-middle" data-feather="loader"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted text-uppercase fw-semibold small">Declined</span>
                            <h2 class="my-2 fw-bold text-dark">{{ $this->posts->where('status', 'declined')->count() }}</h2>
                            <small class="text-danger d-inline-flex align-items-center">
                                <i class="align-middle me-1" data-feather="alert-circle"></i> Needs changes
                            </small>
                        </div>
                        <div class="stat text-danger bg-danger-subtle rounded-circle p-3">
                            <i class="align-middle" data-feather="alert-triangle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table Card -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent py-3 border-bottom d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <h5 class="card-title mb-0 fw-bold">All {{ $loc == 'ad' ? 'Advertisements' : 'Articles' }}</h5>
                <span class="badge bg-secondary-subtle text-secondary rounded-pill ms-2 px-2 py-1 small">{{ $this->posts->count() }} Total</span>
            </div>
            @if ($this->posts->isNotEmpty())
                <div class="text-muted small">
                    Showing latest entries
                </div>
            @endif
        </div>

        <div class="card-body p-0">
            @if ($this->posts->isEmpty())
                <div class="text-center py-5 px-3">
                    <div class="mb-3 text-muted">
                        <div class="stat d-inline-block rounded-circle bg-light p-3">
                            <i class="align-middle" data-feather="file-text" style="width: 32px; height: 32px;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">No {{ $loc == 'ad' ? 'Advertisements' : 'Posts' }} Found</h5>
                    <p class="text-muted mb-3" style="max-width: 420px; margin: 0 auto;">
                        You haven't published any {{ $loc == 'ad' ? 'advertisements' : 'blog posts' }} yet. Click the button below to get started.
                    </p>
                    <a href="{{ route('user.bulletin.create', ['loc' => $loc]) }}" class="btn btn-primary btn-sm" wire:navigate>
                        <i class="align-middle me-1" data-feather="plus"></i> Create {{ $loc == 'ad' ? 'First Ad' : 'First Post' }}
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    @if ($loc == 'blog')
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th style="min-width: 280px;">Post Details</th>
                                    <th>Tags</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th class="text-end pe-4" style="min-width: 180px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->posts as $post)
                                    <tr>
                                        <td class="text-center text-muted fw-semibold">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!-- Thumbnail preview -->
                                                <div class="me-3 position-relative flex-shrink-0" style="width: 56px; height: 42px;">
                                                    @if ($post->is_video)
                                                        <div class="w-100 h-100 rounded bg-dark d-flex align-items-center justify-content-center text-white">
                                                            <i class="align-middle" data-feather="video" style="width: 18px; height: 18px;"></i>
                                                        </div>
                                                    @elseif ($post->file)
                                                        <img src="{{ asset('storage/' . $post->file) }}"
                                                            alt="{{ $post->title }}"
                                                            class="w-100 h-100 rounded object-fit-cover border"
                                                            onerror="this.onerror=null; this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'56\' height=\'42\' fill=\'%23dee2e6\'><rect width=\'100%\' height=\'100%\'/></svg>';">
                                                    @else
                                                        <div class="w-100 h-100 rounded bg-light border d-flex align-items-center justify-content-center text-muted">
                                                            <i class="align-middle" data-feather="image" style="width: 18px; height: 18px;"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                                <!-- Title & Category -->
                                                <div class="overflow-hidden">
                                                    <a href="{{ route('user.bulletin.post', ['post' => $post->id, 'loc' => $loc]) }}" class="fw-semibold text-dark text-decoration-none d-block text-truncate mb-1" style="max-width: 380px;" title="{{ $post->title }}" wire:navigate>
                                                        {{ $post->title }}
                                                    </a>
                                                    <div class="d-flex align-items-center gap-1">
                                                        @if ($post->category)
                                                            <span class="badge bg-light text-secondary border small">{{ $post->category }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($post->tags)
                                                <div class="d-flex flex-wrap gap-1" style="max-width: 220px;">
                                                    @foreach (explode(',', $post->tags) as $tag)
                                                        @if (trim($tag))
                                                            <span class="badge bg-light text-dark border small">{{ trim($tag) }}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @else
                                                <span class="text-muted small">&mdash;</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($post->status === 'approved')
                                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                                    <i class="align-middle me-1" data-feather="check" style="width: 12px; height: 12px;"></i> Approved
                                                </span>
                                            @elseif ($post->status === 'pending')
                                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-2 py-1">
                                                    <i class="align-middle me-1" data-feather="clock" style="width: 12px; height: 12px;"></i> Pending
                                                </span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1">
                                                    <i class="align-middle me-1" data-feather="alert-circle" style="width: 12px; height: 12px;"></i> Declined
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="text-dark fw-medium small">{{ $post->created_at->format('d M, Y') }}</div>
                                            <div class="text-muted small">{{ $post->created_at->diffForHumans() }}</div>
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-inline-flex align-items-center gap-1">
                                                <!-- View Button -->
                                                <a href="{{ route('user.bulletin.post', ['post' => $post->id, 'loc' => $loc]) }}"
                                                class="btn btn-sm btn-outline-primary"
                                                title="View Post"
                                                wire:navigate>
                                                    <i class="align-middle" data-feather="eye" style="width: 14px; height: 14px;"></i>
                                                    <span class="d-none d-md-inline ms-1">View</span>
                                                </a>
                                                <!-- Edit Button -->
                                                <a href="{{ route('user.bulletin.edit', ['post' => $post->id, 'loc' => $loc]) }}"
                                                class="btn btn-sm btn-outline-secondary"
                                                title="Edit Post"
                                                wire:navigate>
                                                    <i class="align-middle" data-feather="edit-2" style="width: 14px; height: 14px;"></i>
                                                    <span class="d-none d-md-inline ms-1">Edit</span>
                                                </a>
                                                <!-- Delete Button -->
                                                <button type="button"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="Delete"
                                                        wire:confirm="Are you sure you want to permanently delete this post?"
                                                        wire:click="deletePost({{ $post->id }})">
                                                    <i class="align-middle" data-feather="trash-2" style="width: 14px; height: 14px;"></i>
                                                    <span class="d-none d-md-inline ms-1">Delete</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th style="min-width: 280px;">Ad Details</th>
                                    <th>CTA</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th class="text-end pe-4" style="min-width: 180px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->posts as $post)
                                    <tr>
                                        <td class="text-center text-muted fw-semibold">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!-- Thumbnail preview -->
                                                <div class="me-3 position-relative flex-shrink-0" style="width: 56px; height: 42px;">
                                                    <img src="{{ asset('storage/' . $post->file) }}"
                                                        alt="{{ $post->title }}"
                                                        class="w-100 h-100 rounded object-fit-cover border"
                                                        onerror="this.onerror=null; this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'56\' height=\'42\' fill=\'%23dee2e6\'><rect width=\'100%\' height=\'100%\'/></svg>';">
                                                </div>
                                                <!-- Title & Category -->
                                                <div class="overflow-hidden">
                                                    <a href="{{ route('user.bulletin.post', ['post' => $post->id, 'loc' => $loc]) }}" class="fw-semibold text-dark text-decoration-none d-block text-truncate mb-1" style="max-width: 380px;" title="{{ $post->title }}" wire:navigate>
                                                        {{ $post->title }}
                                                    </a>
                                                    <div class="d-flex align-items-center gap-1">
                                                        @if ($post->category)
                                                            <span class="badge bg-light text-secondary border small">{{ $post->category }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-secondary border small">{{ $post->cta }}</span>
                                        </td>
                                        <td>
                                            @if ($post->status === 'approved')
                                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                                    <i class="align-middle me-1" data-feather="check" style="width: 12px; height: 12px;"></i> Approved
                                                </span>
                                            @elseif ($post->status === 'pending')
                                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-2 py-1">
                                                    <i class="align-middle me-1" data-feather="clock" style="width: 12px; height: 12px;"></i> Pending
                                                </span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1">
                                                    <i class="align-middle me-1" data-feather="alert-circle" style="width: 12px; height: 12px;"></i> Declined
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="text-dark fw-medium small">{{ $post->created_at->format('d M, Y') }}</div>
                                            <div class="text-muted small">{{ $post->created_at->diffForHumans() }}</div>
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-inline-flex align-items-center gap-1">
                                                <!-- View Button -->
                                                <a href="{{ route('user.bulletin.post', ['post' => $post->id, 'loc' => $loc]) }}"
                                                class="btn btn-sm btn-outline-primary"
                                                title="View Ad"
                                                wire:navigate>
                                                    <i class="align-middle" data-feather="eye" style="width: 14px; height: 14px;"></i>
                                                    <span class="d-none d-md-inline ms-1">View</span>
                                                </a>
                                                <!-- Edit Button -->
                                                <a href="{{ route('user.bulletin.edit', ['post' => $post->id, 'loc' => $loc]) }}"
                                                class="btn btn-sm btn-outline-secondary"
                                                title="Edit Ad"
                                                wire:navigate>
                                                    <i class="align-middle" data-feather="edit-2" style="width: 14px; height: 14px;"></i>
                                                    <span class="d-none d-md-inline ms-1">Edit</span>
                                                </a>
                                                <!-- Delete Button -->
                                                <button type="button"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="Delete"
                                                        wire:confirm="Are you sure you want to permanently delete this ad?"
                                                        wire:click="deletePost({{ $post->id }})">
                                                    <i class="align-middle" data-feather="trash-2" style="width: 14px; height: 14px;"></i>
                                                    <span class="d-none d-md-inline ms-1">Delete</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            @endif
        </div>
    </div>

    @script
        <script>
            $wire.hook('morph.updated', () => {
                if (typeof feather !== 'undefined') {
                    feather.replace();
                }
            });
            $wire.on('postDeleted', () => {
                if (typeof feather !== 'undefined') {
                    feather.replace();
                }
            });
        </script>
    @endscript
</div>
