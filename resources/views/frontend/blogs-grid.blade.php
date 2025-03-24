@extends('layouts.header')
@section('title', "Salesforce Technology Solutions Provider Company - Kitaracloud")
@section('description', "We are always responsive and reliable, this is our keys to Success, we promise and deliver excellent work all time.")
@section('keywords', "Salesforce Consulting Services, Salesforce Implementation Services, Community Cloud Implementation")

@section('content')
    <!-- Start Techno Breatcome Area -->
    <div class="breatcome_area d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breatcome_title">
              <div class="breatcome_title_inner pb-2">
                <h2>Our Latest Blogs</h2>
              </div>
              <div class="breatcome_content">
                <ul>
                  <li>
                    <a href="{{ url('/')}}">Home</a>
                    <i class="fa fa-angle-right"></i> <span>Blogs</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Techno Breatcome Area -->
     
    <!----- Start Techno Blog Area ----->
    <div class="blog_area pt-85 pb-65">
      <div class="container">
        <div class="row">
          <div class="row g-4 justify-content-center">
            @if(isset($data['blogs']) && $data['blogs']->count() > 0)
              @foreach ($data['blogs'] as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12 single_blog lazy-load">
                  <div class="single_blog mb-30">
                    <div class="single_blog_thumb pb-4">
                      <a href="{{ route('blogs.showById', ['id' => $blog->id]) }}">
                        <img data-src="{{ asset('storage/' . $blog->image) }}" class="img-fluid blogs-image lazy" alt="{{ $blog->title }}">
                      </a>
                    </div>
                    <div class="single_blog_content pl-4 pr-4">
                      <div class="techno_blog_meta">
                        <a href="#">{{ $blog->category_name }}</a>
                        <span class="meta-date pl-3">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</span>
                      </div>
                      <div class="blog_page_title pb-35">
                        <h3>
                          <a href="{{ route('blogs.showById', ['id' => $blog->id]) }}">
                            {{ Str::limit($blog->title, 40) }}
                          </a>
                        </h3>
                      </div>
                      <p class="mb-3">{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
                      <a href="{{ route('blogs.showById', ['id' => $blog->id]) }}" class="btn p-0">
                        Read More <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach
            @else
              <p class="text-center">No blog posts available.</p>
            @endif
          </div>

          <script>
            document.addEventListener("DOMContentLoaded", function() {
              let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
              let observer;

              if ("IntersectionObserver" in window) {
                observer = new IntersectionObserver(function(entries, observer) {
                  entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                      let img = entry.target;
                      img.src = img.getAttribute("data-src");
                      img.classList.remove("lazy");
                      observer.unobserve(img);
                    }
                  });
                });
                lazyImages.forEach(function(img) {
                  observer.observe(img);
                });
              } else {
                // Fallback for older browsers
                lazyImages.forEach(function(img) {
                  img.src = img.getAttribute("data-src");
                });
              }
            });
          </script>
        </div>
      </div>
    </div>
    <!----- End Techno Blog Area ----->
@endsection