<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3">{{ $post ? 'Edit' : 'Create' }} Post</h1>
    </div>
    @if (auth()->user()->blog_payment)
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
                                    <div>Your documents are under review by our team. You will be notified as soon as your documents are approved.</div>
                                </div>
                            </div>
                        @endif
                        <form wire:submit="create">
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
                                    <input type="file" class="form-control" accept="image/*" wire:model="image" required>
                                </div>
                                @error('image')
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
                                    <button type="submit" class="btn btn-primary" @if (!auth()->user()->profile() || !auth()->user()->profile()->is_verified) disabled @endif wire:loading.remove wire:target='image, create'>Submit</button>
                                    <button class="btn btn-primary px-5" wire:loading>
                                        <div class="spinner-border spinner-border-sm text-light" role="status" wire:target='image, create'>
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
                }, 500);
            </script>
        @endscript
    @else
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center align-items-center vh-50 text-center">
                            <div>
                                <i class="fa fa-lock fa-5x mb-3 text-warning"></i> <!-- Icon replacing image -->
                                <h4 class="fw-bold">You need to pay a fee of $10 to access the blog and advert features.</h4>
                                <button class="btn btn-primary mt-1" onclick="makePayment()">Pay Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <script>
            function makePayment() {
                FlutterwaveCheckout({
                    public_key: '{{ env('FLUTTERWAVE_PUBLIC_KEY') }}',
                    tx_ref: '{{ uniqid('ome_', true) }}',
                    amount: 10,
                    currency: 'USD',
                    payment_options: 'card',
                    redirect_url: '{{ route('payment.advert') }}',
                    customer: {
                        email: '{{ auth()->user()->email }}',
                        name: '{{ auth()->user()->name }}',
                    },
                    customizations: {
                        title: '{{ config('app.name') }}',
                        description: 'Blog and Advert placement fee',
                        logo: '{{ asset('assets/img/favicon.png') }}',
                    },
                });
            }
        </script>
    @endif
</div>
