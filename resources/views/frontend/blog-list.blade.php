<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
@extends('frontend.frontend-dashboard')

@section('frontend_content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">BLOGS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Blog Section Start Here -->
    <div class="blog-page-area sec-spacer pt-0 mt-4">
        <div class="container-fluid">
            <div class="row px-3">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-30 border px-0 mr-0">
                        <div class="cource-item">
                            <div class="cource-img">
                                <div class="blog-images">
                                    <img style="height:306px;object-fit:cover;"
                                         src="{{ asset('storage/blog_photo/'.$blog->blog_photo) }}"
                                         alt="blog_photo">
                                </div>
                            </div>
                            <div class="course-body">
                                <div class="blog-content text-center">
                                    <h4 class="my-3">
                                        <a class="text-dark" href="{{ url('/blog/detail/'.$blog->id.'/'.$blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p>{{ $blog->meta_description }}</p>
                                    <a class="" href="{{ url('/blog/detail/'.$blog->id.'/'.$blog->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- .blog-inner end -->
                    </div>
            @endforeach
            </div>
        </div>
        {{ $blogs->links() }}
    </div>
    <!-- Blog End  -->
@endsection
