<div>
    <h1 class="h3 mb-3">My posts</h1>
    @if (session('deleted')) <span x-show="notify('Post Successfully Deleted')"></span> @endif
    <div class="row">
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Approved Posts</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat text-success">
                                <i class="align-middle" data-feather="check-circle"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $posts->where('status', 'approved')->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Pending Posts</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat text-warning">
                                <i class="align-middle" data-feather="loader"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $posts->where('status', 'pending')->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Declined Posts</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat text-danger">
                                <i class="align-middle" data-feather="alert-triangle"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-1">{{ $posts->where('status', 'declined')->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-responsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Tags</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->tags }}</td>
                                        <td>{{ $post->created_at->format('d M, Y') }}</td>
                                        <td class="text-capitalize fw-bold text-{{ $post->status == 'approved' ? 'success' : ($post->status == 'pending' ? 'warning' : 'danger') }}">{{ $post->status }}</td>
                                        <td>
                                            <a href="{{ route('user.blog.post', $post->id) }}" class="btn btn-primary btn-sm mb-2" wire:navigate>View</a>
                                            <button wire:confirm="Are you sure you want to delete this post?" class="btn btn-danger btn-sm mb-2" wire:click="deletePost({{ $post->id }})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
    @push('scripts')
        <script src="{{ asset('portal-assets/js/datatables.js') }}"></script>
        <script>
            $('#datatables-responsive').DataTable({
                responsive: true,
            });
        </script>
    @endpush
    @script
        <script>
            $wire.on('postDeleted', () => {
                window.location.reload()
            });
        </script>
    @endscript
</div>
