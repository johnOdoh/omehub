<div class="container-fluid p-0">
    <div class="mb-2">
        <h1 class="h3 d-inline align-middle">{{ $loc == 'ad' ? 'Adverts' : 'Blog' }}</h1>
    </div>
    @if (session('message')) <span x-show="notify('{{ session('message') }}')"></span> @endif
    <div class="card">
        <div class="card-header px-4 pt-4">
            <div class="card-actions float-end">
                <div class="dropdown position-relative">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                        <i class="fa fa-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" wire:click.prevent="$set('current', 'All')" href="#">All</a>
                        <a class="dropdown-item" wire:click.prevent="$set('current', 'pending')" href="#">Pending</a>
                        <a class="dropdown-item" wire:click.prevent="$set('current', 'approved')" href="#">Approved</a>
                        <a class="dropdown-item" wire:click.prevent="$set('current', 'declined')" href="#">Declined</a>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-0 text-capitalize">{{ $current }} {{ $loc == 'ad' ? 'Adverts' : 'Blog' }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Posted By</th>
                            <th>Title</th>
                            <th>Posted On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $posts->firstItem() + $loop->index }}</td>
                                <td>
                                    <div class="flex-grow-1">
                                        <strong><a href="{{ route('admin.user', $post->user_id) }}" wire:navigate>{{ $post->user->name }}</a></strong>
                                        <div class="text-muted">{{ $post->user->email }}</div>
                                    </div>
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at->format('d M, Y') }}</td>
                                <td><span class="badge bg-{{ $post->status == 'approved' ? 'success' : ($post->status == 'pending' ? 'warning' : 'danger') }} text-capitalize">{{ $post->status }}</span></td>
                                <td class="table-action">
                                    <a href="{{ route('user.bulletin.post', $post->id) }}" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Post" wire:navigate>
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <div class="dropdown position-relative d-inline">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            @if ($post->status == 'pending')
                                                <a class="dropdown-item" wire:confirm='Are you sure you want to approve this post?' wire:click.prevent='updatePost({{ $post->id }}, "approved")' href="#">Approve</a>
                                                <a class="dropdown-item" wire:confirm='Are you sure you want to decline this post?' wire:click.prevent='updatePost({{ $post->id }}, "declined")' href="#">Decline</a>
                                                <div class="dropdown-divider"></div>
                                            @endif
                                            <a class="dropdown-item" wire:confirm='Are you sure you want to delete this post?' wire:click.prevent='deletePost({{ $post->id }})' href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="7"><h5>No {{ $loc == 'ad' ? 'Adverts' : 'Blog' }} Yet</h5></td></tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;z-index:1000;" wire:loading>
        <div class="spinner-grow text-info me-2" role="status" style="position:absolute;top:50%;left:50%">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @script
        <script>
            document.addEventListener('livewire:navigated', function() {
                setTimeout(() => {
                    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    });
                });
            });
            Livewire.hook('commit', ({ component, commit, respond, succeed, fail }) => {
                // Equivalent of 'message.sent'
                succeed(({ snapshot, effects }) => {
                    // Equivalent of 'message.received'
                    queueMicrotask(() => {
                        // Equivalent of 'message.processed'
                        setTimeout(() => {
                            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                            tooltipTriggerList.map(function (tooltipTriggerEl) {
                                return new bootstrap.Tooltip(tooltipTriggerEl)
                            });
                        });
                    })
                })
            })
        </script>
    @endscript
</div>
