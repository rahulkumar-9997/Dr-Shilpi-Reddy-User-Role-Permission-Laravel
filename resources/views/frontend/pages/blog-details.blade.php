@php 
use App\Models\BlogImages;
@endphp
@extends('frontend.layouts.master')
@section('title', $blog->title . ' - Dr. K Shilpireddy')
@section('description', substr($blog->blog_description, 0, 70))
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')

@section('main-content')
    <div class="w-100 float-left header-and-banner-con banner-overlay-img">
        <div class="container">
            <div class="overlay-img">
                <!-- navbar-start -->
                @include('frontend.layouts.header-menu')
                <!-- navbar-end -->
                <section>
                    <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                        <div class="container">
                            <div class="generic-banner-content text-white text-center">
                            <h1>Our Blogs</h1>
                            <p class="text-white mb-0">{{$blog->title}}</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section>
        <div class="w-100 float-left professional-con">
            <div class="container">
                <div class="professional-title">
                {!! $blog->blog_description !!}
                </div>
                <div class="professional-box">
                    <div class="row grid-services">
                        @php 
                        $blog_multiple_image = BlogImages::where(['blog_id' => $blog->id])->orderBy('id','DESC')->get();
                        if ($blog_multiple_image){
                        @endphp
                        @foreach($blog_multiple_image as $image) 
                            <div class="col-lg-4 col-md-4">
                                <article class="single_blog agree_bazar_image">
                                    <figure>
                                        <div class="blog_thumb">
                                        <a class="lightbox" title="" data-fancybox="images-1" data-caption="" href="{{ asset('blog-img/main-img/' . $image->blog_image) }}">
                                            <div class="media">
                                                <img src="{{ asset('blog-img/main-img/' . $image->blog_image) }}" alt="" class="img-responsive main-img">
                                            </div>
                                        </a>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            @endforeach
                        @php
                        }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection