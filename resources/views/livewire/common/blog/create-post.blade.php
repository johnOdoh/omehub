<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3">{{ $post ? 'Edit' : 'Create' }} {{ $loc == 'blog' ? 'Post' : 'Ad' }}</h1>
    </div>
    @if (auth()->user()->bulletin_payment)
        @if (session('success')) <span x-show="notify('{{ session('success') }}')"></span> @endif
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message d-flex">
                <strong class="me-2">Note:</strong>
                <div>Your post is subject to review by our team. We only accept posts that conform to our <a href="{{ route('terms') }}" target="_blank">terms & conditions.</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (!auth()->user()->profile()->exists())
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-message d-flex">
                                    <strong class="me-2"><i class="fa fa-warning"></i></strong>
                                    <div>You are yet to complete your profile. <a href="{{ route('user.profile') }}" wire:navigate>Click here</a> to complete your profile to be able to enjoy our services.</div>
                                </div>
                            </div>
                        @elseif (!auth()->user()->profile->is_verified)
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-message d-flex">
                                    <strong class="me-2"><i class="fa fa-warning"></i></strong>
                                    <div>Your documents are under review by our team. You will be notified as soon as your documents are approved.</div>
                                </div>
                            </div>
                        @endif
                        @if ($loc == 'blog')
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
                                        <label class="form-label">Description <i class="small">(200 characters max)</i></label>
                                        <textarea rows="2" maxlength="200" class="form-control" placeholder="Briefly describe the content of your post. This will help readers find your post faster." wire:model="description" required></textarea>
                                    </div>
                                    @error('description')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="my-3">
                                    <div class="form-group">
                                        <label class="form-label">Cover Image <i class="small"></i></label>
                                        <input type="file" class="form-control" accept="image/*" wire:model="file" required>
                                    </div>
                                    @error('file')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="my-3">
                                    <div class="clearfix" wire:ignore>
                                        <div id="quill-toolbar">
                                            <span class="ql-formats">
                                                <select class="ql-font" title="Font style"></select>
                                                <select class="ql-size" title="font size"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-bold" title="Bold"></button>
                                                <button class="ql-italic" title="Italic"></button>
                                                <button class="ql-underline" title="Underline"></button>
                                                <button class="ql-strike" title="Strike"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-script" value="sub" title="subscript"></button>
                                                <button class="ql-script" value="super" title="superscript"></button>
                                            </span>
                                            <span class="ql-formats">
                                                {{-- <button class="ql-header" value="1" title="Heading"></button> --}}
                                                <button class="ql-header" value="2" title="Heading"></button>
                                                {{-- <button class="ql-header" value="3" title="Heading"></button>
                                                <button class="ql-header" value="4" title="Heading"></button>
                                                <button class="ql-header" value="5" title="Subheading"></button> --}}
                                                <button class="ql-blockquote" title="Blockquote"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-list" value="ordered" title="Numbered"></button>
                                                <button class="ql-list" value="bullet" title="Bullet"></button>
                                                <button class="ql-indent" value="-1" title="Reduce Indent"></button>
                                                <button class="ql-indent" value="+1" title="Increase Indent"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <select class="ql-align" title="Align"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-link" title="Link"></button>
                                                <button class="ql-image" title="Image"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-clean" title="Clear formatting"></button>
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
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile || !auth()->user()->profile->is_verified) disabled @endif wire:loading.remove wire:target='file, body,createPost'>Submit</button>
                                        <button class="btn btn-primary px-5" wire:loading>
                                            <div class="spinner-border spinner-border-sm text-light" role="status" wire:target='file, body, createPost'>
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <form wire:submit="createAd">
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
                                        <label class="form-label">Description <i class="small">(200 characters max)</i></label>
                                        <textarea rows="2" maxlength="200" class="form-control" placeholder="Briefly describe the content of your ad. This will help users find your ad faster." wire:model="description" required></textarea>
                                    </div>
                                    @error('description')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="my-3">
                                    <div class="form-group">
                                        <label class="form-label">Cover Image/Video <i class="small">(5MB max)</i></label>
                                        <input type="file" class="form-control" accept="image/*,video/*" wire:model="file" required>
                                    </div>
                                    @error('file')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <div class="my-3">
                                    <div class="clearfix" wire:ignore>
                                        <div id="quill-toolbar">
                                            <span class="ql-formats">
                                                <select class="ql-font" title="Font style"></select>
                                                <select class="ql-size" title="font size"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-bold" title="Bold"></button>
                                                <button class="ql-italic" title="Italic"></button>
                                                <button class="ql-underline" title="Underline"></button>
                                                <button class="ql-strike" title="Strike"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-script" value="sub" title="subscript"></button>
                                                <button class="ql-script" value="super" title="superscript"></button>
                                            </span>
                                            <span class="ql-formats">
                                                {{-- <button class="ql-header" value="1" title="Heading"></button> --}}
                                                <button class="ql-header" value="2" title="Heading"></button>
                                                {{-- <button class="ql-header" value="3" title="Heading"></button>
                                                <button class="ql-header" value="4" title="Heading"></button>
                                                <button class="ql-header" value="5" title="Subheading"></button> --}}
                                                <button class="ql-blockquote" title="Blockquote"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-list" value="ordered" title="Numbered"></button>
                                                <button class="ql-list" value="bullet" title="Bullet"></button>
                                                <button class="ql-indent" value="-1" title="Reduce Indent"></button>
                                                <button class="ql-indent" value="+1" title="Increase Indent"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <select class="ql-align" title="Align"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-clean" title="Clear formatting"></button>
                                            </span>
                                        </div>
                                        <div id="quill-editor">{!! $body !!}</div>
                                    </div>
                                    @error('body')
                                        <div class="text-danger"><small><i>{{ $message }}</i></small></div>
                                    @enderror
                                </div>
                                <input type="hidden" wire:model="body" required>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile?->is_verified) disabled @endif wire:loading.remove wire:target='file, body, createAd'>Submit</button>
                                        <button class="btn btn-primary px-5" wire:loading>
                                            <div class="spinner-border spinner-border-sm text-light" role="status" wire:target='file, body, createAd'>
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @script
            <script>
                setTimeout(() => {
                     // Extend Header blot
                    const Parchment = Quill.import("parchment");
                    const Header = Quill.import("formats/header");

                    class ExtendedHeader extends Header {}
                    ExtendedHeader.allowed = [1, 2, 3, 4, 5, 6];
                    Quill.register(ExtendedHeader, true);
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
                    $wire.on('clear', () => {
                        quill.root.innerHTML = ''
                    })
                }, 500);
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
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Our Bulletin section is currently locked</h1>
                <p class="lead text-center mb-4">Luckily, you can unlock it with as little as $5 per month.</p>
                <div class="row py-4">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card text-center h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-4">
                                    <h5 class="mb-3">Monthly</h5>
                                    <span class="display-4">$5</span><span>/month</span>
                                </div>
                                <h6>Includes:</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        Access to the Blog and Ads section
                                    </li>
                                    <li class="mb-2">
                                        Unlimited Posts
                                    </li>
                                    <li class="mb-2">
                                        Prompt post approvals
                                    </li>
                                </ul>
                                <div class="mt-auto">
                                    <button class="btn btn-lg btn-outline-primary" onclick="makePayment('monthly', 5)">Select</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card text-center h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-4">
                                    <h5 class="mb-3">Biannual</h5>
                                    <span class="display-4">$28</span><span>/6 months</span>
                                </div>
                                <h6>Includes:</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        Access to the Blog and Ads section
                                    </li>
                                    <li class="mb-2">
                                        Unlimited Posts
                                    </li>
                                    <li class="mb-2">
                                        Prompt post approvals
                                    </li>
                                </ul>
                                <div class="mt-auto">
                                    <button class="btn btn-lg btn-primary" onclick="makePayment('biannual', 28)">Select</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card text-center h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-4">
                                    <h5 class="mb-3">Annual</h5>
                                    <span class="display-4">$50</span><span>/year</span>
                                </div>
                                <h6>Includes:</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        Access to the Blog and Ads section
                                    </li>
                                    <li class="mb-2">
                                        Unlimited Posts
                                    </li>
                                    <li class="mb-2">
                                        Prompt post approvals
                                    </li>
                                </ul>
                                <div class="mt-auto">
                                    <button class="btn btn-lg btn-outline-primary" onclick="makePayment('annual', 50)">Select</button>
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
