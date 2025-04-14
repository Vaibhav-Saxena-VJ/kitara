@extends('layouts.header')
@section('title', "Blog Details Page - Jfinserv")
@section('description', "")
@section('keywords', "")

@section('content')
<!-- BLOG AREA -->
<div class="blog_area blog-details-area pt-20 pb-100" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog_details">
                            <div class="blog_dtl_thumb">
                                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded w-100" alt="{{ $blog->title }}">
                            </div>
                            
                            <div class="blog_dtl_content">
                                <div class="blog_dtl_top_bs pt-2">
                                    <span>{{ $blog->category->name }}</span>
                                </div>
                                <h2 class="text-capitalize">{{ $blog->title }}</h2>
                                
                                <!-- BLOG META -->
                                <div class="techno-blog-meta">
                                    <div class="techno-blog-meta-left">
                                        <span><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }} </span>
                                        <span><i class="fa fa-comments-o"></i> 0 Comments</span>
                                        <span><i class="fa fa-thumbs-up"></i> 0 Likes</span>
                                    </div>
                                </div>
                                
                                <div class="blog_description">
                                    {!! $blog->description !!}
                                </div>                                
                                <div class="blog_details_dtn_icon">
                                    <a href="https://www.linkedin.com/in/kitaracloud-techlabs-7762aa229/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/kitaracloud"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100076460610424"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/kitaracloud/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>  

                    @if($comments->count())
                        <div class="blog_comments_section mt-5">
                            <div class="comments_ttl">
                                <h3>{{ $comments->count() }} Comment{{ $comments->count() > 1 ? 's' : '' }}</h3>
                            </div>
                            @foreach($comments as $comment)
                            <div class="single_comments">
                                <div class="commentst_content">
                                    <div class="post_meta">
                                        <span class="badmin">{{ $comment->name }}</span>
                                        <span class="badmin"><i class="fa fa-clock-o"></i> {{ $comment->created_at->format('d M Y') }}</span>
                                    </div>

                                    <p>{{ $comment->message }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif    

                    
                    <div class="col-md-12">
                        <div class="blog_reply_coment_dtl mt-5">
                            <div class="reply_ttl">
                                <h3>Leave Comments</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="contact_from">
                                        <form action="{{ route('blogs.comment') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">                                            @csrf
                                            <div class="row g-3">
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                                                        <label for="name">Your Name</label>
                                                    </div>                                    
                                                </div>
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control border" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" required>
                                                        <label for="email">Your Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control border" id="message" name="message" placeholder="Leave a message here" style="height: 120px" required>{{ old('message') }}</textarea>
                                                        <label for="message">Write Your Comment...</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="status"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
                <div class="blog-left-side widget">
                    <div class="widget_about widget sn_bd_dtl_wd">
                        <h2 class="widget-title">About Me</h2>
                        <div class="widget_about_thumb">
                            <img src="{{ asset('theme') }}/assets/images/hitesh.jpg" alt="" class="rounded-circle" />
                        </div>
                        <div class="widget_about_content">
                            <h5>Hitesh Patel</h5>
                            <p>Founder & CEO</p>
                        </div>
                        <div class="widget_about_icon">
                            <a href="https://www.linkedin.com/in/kitaracloud-techlabs-7762aa229/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/kitaracloud"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100076460610424"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/kitaracloud/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    
                    <div id="em_recent_post_widget-6" class="widget widget_recent_data" >
                        <div class="single-widget-item">
                            <h2 class="widget-title"><strong>Popular Post</strong></h2>
                            <div class="recent-post-item">
                                @foreach($featuredBlogs as $featuredBlog)
                                    <div class="recent-post-image">
                                        <a href="#">
                                            <img width="80" height="80" src="{{ asset('storage/' . $blog->image) }}" class="trendy-blog" alt="{{ $blog->title }}">
                                        </a>
                                    </div>
                                    <div class="recent-post-text">
                                        <h4>
                                            <a href="{{ route('blogs.showById', ['id' => $blog->id]) }}">{{ $featuredBlog->title }}</a>
                                        </h4>
                                        <span class="rcomment">{{ $featuredBlog->created_at->format('F d, Y') }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="tags" class="widget thumb_left">
                        <div class="wedget_sideber_thumb">
                            <a href="/contactus"><img src="{{ asset('theme') }}/assets/images/blg-dtl-sd.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BLOG_AREA END -->
@endsection