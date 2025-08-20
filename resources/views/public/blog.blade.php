@extends('public.layout.main')

@section('title', 'Blogs')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
      <div class="container position-relative">
        <h1>{{ $loc == 'ads' ? 'Ads' : 'Blog' }}</h1>
        <p>Explore {{ $loc == 'ads' ? 'Ads' : 'Blog posts' }} created by our partners</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">{{ $loc == 'ads' ? 'Ads' : 'Blog' }}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

        <!-- About Section -->
    <section id="services" class="blog services section">

      <div class="container">

        <form action="{{ route('search') }}" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="100">
            <input type="text" name="q" class="form-control" placeholder="What are you looking for?" value="{{ request('q') }}" required>
            <input type="hidden" name="loc" value="{{ $loc }}" required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="row gy-4">
            @forelse ($posts as $post)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img about">
                            @if ($post->is_video)
                            <img src="{{ asset('assets/img/play-btn.png/') }}" alt="cover image" class="img-fluid" width="774" height="353">
                            @else
                                <img src="{{ asset('storage/'.$post->file) }}" alt="cover image" class="img-fluid" width="774" height="353">
                            @endif
                        </div>
                        <h3><a href="{{ route('bulletin.single', $post->id) }}" class="stretched-link">{{ $post->title }}</a></h3>
                        <p>{{ $post->description }}</p>
                    </div>
                </div><!-- End Card Item -->
            @empty
                <h3 data-aos="fade-up" data-aos-delay="100"><em>No Posts found</em></h3>
            @endforelse
        </div>

        {{ $posts->links('vendor.pagination.default') }}

      </div>

    </section><!-- /About Section -->

  </main>

@endsection
