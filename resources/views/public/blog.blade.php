@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
      <div class="container position-relative">
        <h1>Blogs</h1>
        <p>Explore posts from our partners</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

        <!-- About Section -->
    <section id="services" class="services section">

      <div class="container">

        <div class="row gy-4">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="cover image" class="img-fluid" width="774" height="353">
                        </div>
                        <h3><a href="{{ route('blog.single', $post->id) }}" class="stretched-link">{{ $post->title }}</a></h3>
                        <p>{{ $post->description }}</p>
                    </div>
                </div><!-- End Card Item -->
            @endforeach
        </div>

      </div>

    </section><!-- /About Section -->

  </main>

@endsection
