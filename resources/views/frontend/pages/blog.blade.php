@php 
use App\Models\BlogImages;
@endphp
@extends('frontend.layouts.master')
@section('title','Top gynecologist in Hyderabad - Dr. K Shilpireddy')
@section('description', 'Share text and photos with your friends and have fun')
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
                           <!-- <p class="text-white mb-0">Business and Organizations By Dr.K. Shilpi Reddy</p>-->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section class=" blog-posts w-100 float-left">
        <div class="container">
            <div class="row">
                <div id="blog" class="col-xl-12">
                    <div class="row">
                    @if (isset($data['blog_list']) && $data['blog_list']->count() > 0)
                        @foreach($data['blog_list'] as $blog_list_row)
                        @php 
                            $blog_multiple_image = BlogImages::where(['blog_id' => $blog_list_row->id])->first()->blog_image;
                        @endphp
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="{{url('blog/'.$blog_list_row->slug.'') }}">
                                            <img alt="{{$blog_list_row->title}}" src="{{asset('blog-img/main-img/'.$blog_multiple_image) }}">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>
                                            <a href="{{url('blog/'.$blog_list_row->slug.'') }}">{{$blog_list_row->title}}</a>
                                        </h2>
                                    <p>
                                    {!! substr($blog_list_row->blog_description, 0, 190) !!}
                                    </p>
                                    <a href="{{url('blog/'.$blog_list_row->slug.'') }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                        
                    </div>
                </div>
            </div>
        </div>
        </section>  
@endsection