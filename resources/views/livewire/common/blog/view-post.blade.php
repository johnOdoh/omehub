<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto">
            <h3>{{ $post->title }}</h3>
        </div>
        <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{ route('user.blog.edit', $post->id) }}" class="btn btn-primary" wire:navigate>Edit Post</a>
        </div>
    </div>
    @if ($post->status == 'approved')
        <hr>
        <div class="d-flex">
            <p class="my-0"><i class="fa fa-heart text-danger"></i> 300</p>
            <div class="ms-auto">
                <div class="dropdown position-relative">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" title="Share" class="text-decoration-none text-dark">
                        <i class="align-middle" data-feather="share"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Copy link</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
