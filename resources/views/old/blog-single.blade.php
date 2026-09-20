@extends('public.layout.main')

@section('title', $post->title)
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/quote-and-book.webp') }});">
      <div class="container position-relative">
        <h1>{{ $post->title }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">{{ $post->title }}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                @if ($post->is_video)
                    <div class="about">
                        <div class="position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/play-btn.png/') }}" alt="cover image" class="img-fluid" width="774" height="353">
                            <a href="{{ asset('storage/'.$post->file) }}" class="glightbox pulsating-play-btn"></a>
                        </div>
                    </div>
                @else
                    <img src="{{ asset('storage/'.$post->file) }}" alt="cover image" class="img-fluid services-img">
                @endif
                <h3>{{ $post->title }}</h3>
                {!! $post->body !!}
                <div class="mt-5">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://omehub.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
