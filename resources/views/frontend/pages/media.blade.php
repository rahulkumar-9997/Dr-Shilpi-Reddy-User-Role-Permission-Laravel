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
                            <h1>Media</h1>
                            <p class="text-white mb-0">Glimpse of events and activities conducted by Dr.K.Shilpi Reddy</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @if (isset($data['media_list']) && $data['media_list']->count() > 0)
    <section>
        <div class="w-100 float-left professional-con">
            <div class="container">
                <div class="professional-box">
                    <div class="row grid-services">
                    @foreach($data['media_list'] as $media_list_row)
                        <div class="col-lg-4 col-md-4">
                            <article class="single_blog agree_bazar_image">
                                <figure>
                                    <div class="blog_thumb border border-radius">
                                    <a class="lightbox" title="{{$media_list_row->title}}" data-fancybox="images-1" data-caption="" href="{{asset('media-img/main-img/' . $media_list_row->media_image) }}">
                                        <div class="media">
                                            <img src="{{asset('media-img/main-img/' . $media_list_row->media_image) }}" alt="{{$media_list_row->title}}" class="img-responsive main-img">
                                        </div>
                                        <div class="media_title">
                                            <h4 class="text-center">
                                            {{$media_list_row->title}}
                                            </h4>
                                        </div>
                                    </a>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                    
                    </div>
                    <div class="pagination col-xl-12"">
                        {!! $data['media_list']->render() !!}
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endif
@endsection