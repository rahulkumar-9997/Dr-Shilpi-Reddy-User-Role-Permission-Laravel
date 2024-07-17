@php 
use App\Models\BlogImages;
@endphp
@extends('frontend.layouts.master')
@section('title','Best gynecologist in Hyderabad - Dr. K Shilpireddy')
@section('description', 'Find the Best gynecologist in Hyderabad for exceptional womens healthcare. Trust their expertise for personalized, compassionate treatment.')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')

@section('main-content')
<!-- header-and-banner-section -->
    <div class="w-100 float-left header-and-banner-con banner-overlay-img">
        <div class="container">
            <div class="overlay-img">
                <!-- navbar-start -->
                @include('frontend.layouts.header-menu')
                <!-- navbar-end -->
                <!-- banner-start -->
                @include('frontend.layouts.banner-top')
                <!-- banner-end -->
            </div>
        </div>
    </div>
    <section>
        <div class="w-100 float-left feature-box-con text-center four_column">
            <div class="container">
                <div class="row bg-white">
                    <div class="col-lg-3 col-md-3 col-sm-6  pl-0 pr-0">
                    <a href="https://mrsmomevent.com/" target="_blank">
                        <div class="feature-box-item ">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/fav-icon/mr_mom.png')}}" alt="feature-box-icon" class="img-fluid effect">
                            </figure>
                            <h5>Mr. Mom</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipi.</p>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
                    <a href="{{url('ibu-care') }}">
                        <div class="feature-box-item ">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/fav-icon/ibu_care.png')}}" alt="feature-box-icon" class="img-fluid effect">
                            </figure>
                            <h5>IBU Care</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipi.</p>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
                    <a href="{{url('our-foundation') }}">
                        <div class="feature-box-item our_foundation_div two_images">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/fav-icon/our_foundation.png')}}" alt="feature-box-icon" class="img-fluid first_img">
                                <img src="{{asset('fronted/shilpi-img/fav-icon/hover_foundation.png')}}" alt="feature-box-icon" class="img-fluid second_img">
                            </figure>
                            <h5>Our Foundation</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipi.</p>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
                    <a href="{{url('blog') }}">
                        <div class="feature-box-item ">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/fav-icon/blog.png')}}" alt="feature-box-icon" class="img-fluid effect">
                            </figure>
                            <h5>Blog</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipi.</p>
                        </div>
                    </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 float-left quality-system-con video-pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h2>About Dr.K.Shilpi Reddy
                        </h2>
                        <p>My father envisioned me as a doctor, specifically an unconventional doctor who would see the depth of a problem and treat any physical or physiological issues with 360-degree care and compassion. After finishing high school in 1993, I pursued my interests in biology and life sciences and enrolled at the prestigious Villa Marie Junior College in Hyderabad, which was led by Miss Philomena, a powerful woman guided by her intuition. She was a huge source of inspiration for me.</p>
                        <a href="{{url('about-us') }}" class="appointment-btn">About Us</a>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 align-self-center">
                    <div class="quality-system-right-con position-relative text-center video-div">
                        <div class="video-container">
                            <video class="tag-video" controls autoplay>
                                <source src="{{asset('fronted/shilpi-img/My-Story-_-About-Dr.-K.-Shilpi-Reddy-Obstetrician-Gynecologist-_-Origin-of-Mrs.-Mom-Event-1.mp4')}}"  type="video/mp4">
                            </video>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 float-left fun-facts-con counting-fun feedback_three1">
            <div class="container">
                <div class="fun-facts-box-con text-sm-left text-center">
                    <div class="row bg-white">
                    <div class="col-lg-4 col-md-6 col-4 pl-0 pr-0 border-right-0">
                        <div class="fun-facts-box-item d-sm-flex align-items-sm-center">
                            <figure class="mb-0 d-inline-block">
                                <img src="{{asset('fronted/shilpi-img/feedback-icon/normal_delivery_1.png')}}" alt="fun-facts-icon1" class="img-fluid">
                            </figure>
                            <div class="fun-facts-item-content d-inline-block">
                                <div class="position-relative fun-facts-item-title d-inline-block">
                                <h2 class="count">150</h2>
                                <span>+</span>
                                </div>
                                <p class="mb-0">V BACs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-4 pl-0 pr-0 border-right-0">
                        <div class="fun-facts-box-item d-sm-flex align-items-sm-center">
                            <figure class="mb-0 d-inline-block">
                                <img src="{{asset('fronted/shilpi-img/feedback-icon/V_BACs_1.png')}}" alt="fun-facts-icon1" class="img-fluid">
                            </figure>
                            <div class="fun-facts-item-content d-inline-block">
                                <div class="position-relative fun-facts-item-title d-inline-block">
                                <h2 class="count">75</h2>
                                <span>%</span>
                                </div>
                                <p class="mb-0">Normal Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-4 pl-0 pr-0">
                        <div class="fun-facts-box-item d-sm-flex align-items-sm-center">
                            <figure class="mb-0 d-inline-block">
                                <img src="{{asset('fronted/shilpi-img/feedback-icon/feedback.png')}}" alt="fun-facts-icon1" class="img-fluid">
                            </figure>
                            <div class="fun-facts-item-content d-inline-block">
                                <div class="position-relative fun-facts-item-title d-inline-block">
                                <h2 class="count">98</h2>
                                <span>%</span>
                                </div>
                                <p class="mb-0">Positive Feedback</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 float-left mobile-app-con">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 order-xl-0 order-lg-0 order-md-0 order-2">
                    <div class="mobile-app-left-con position-relative text-center">
                        <figure class="mb-0">
                            <img src="{{asset('fronted/shilpi-img/mobile_app.png')}}" alt="mobile-img" class="img-fluid human-img">
                        </figure>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-xl-left text-lg-left text-md-left text-center">
                    <div class="mobile-app-right-con">
                        <h2>For Online Consultancy</h2>
                        <p>I look forwards towards adapting new and innovative way of meeting my patients.</p>
                        <h4>Download the App from the link below</h4>
                        <div class="mobile-app-btn">                        
                            <a href="https://play.google.com/store/apps/details?id=com.shilpi.reddy.user" class="appointment-btn"><i class="fab fa-google-play text-white"></i>Goolge Play</a>
                            <a href="https://apps.apple.com/us/app/dr-shilpi/id6462843184" class="appointment-btn"><i class="fab fa-app-store text-white"></i>App Store</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (isset($data['blog_list']) && $data['blog_list']->count() > 0)
	<section>
        <div class="w-100 float-left blog-con hom_blog_page">
            <div class="container">
                <div class="text-center">
                    <h2>Our Latest Blogs</h2>
                    <p>Seram ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt aenean<br>
                    leo ligula porttitor eu consequat vitae eleifend tac.
                    </p>
                </div>
                <div class="row">
                @foreach($data['blog_list'] as $blog_list_row)
                @php 
                $blog_multiple_image = BlogImages::where(['blog_id' => $blog_list_row->id])->first()->blog_image;
                @endphp
                    <div class="col-lg-4 col-md-4">
                        <a href="{{url('blog/'.$blog_list_row->slug.'') }}">
                            <div class="blog-item">
                                <figure class="mb-0">
                                    <img src="{{asset('blog-img/main-img/'.$blog_multiple_image) }}" alt="{{$blog_list_row->title}}" class="img-fluid">
                                </figure>
                                <div class="blog-item-content">
                                    <!--<div class="blog-item-auther-name">
                                    <span>By David William</span>
                                    <span>Dec 1, 2022</span>
                                    </div>-->
                                    <h4>{{$blog_list_row->title}}</h4>
                                    <p class="mb-0">{!! substr($blog_list_row->blog_description, 0, 200) !!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    <section>
        <div class="w-100 float-left form-main-con" id="contact-form">
            <div class="container">
                <div class="text-center">
                    <h2>Book An Appointment With <br>Dr. K. Shilpi Reddy</h2>
                    <p>Find Solutions to Your obstetrician & Gynaecology Problems
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-xl-0 order-lg-0 order-2">
                    <div class="form-left-con position-relative text-center">
                        <!--<figure class="mb-0 left-curve-img wow slideInLeft">
                            <img src="assets/image/small-left-curve-img.png" alt="" class="img-fluid">
                            </figure>-->
                        <figure class="mb-0">
                            <img src="{{asset('fronted/shilpi-img/Appointment.png')}}" alt="form-left-img" class="img-fluid human-img form-left-img">
                        </figure>
                        <!--<figure class="mb-0 right-curve-img wow slideInRight">
                            <img src="assets/image/small-right-curve-img.png" alt="" class="img-fluid">
                            </figure>-->
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <form action="{{route('home-enquiry.store')}}" class="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">    
                                <input type="text" class="form-control" placeholder="Name:" name="name" id="name"> 
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email:">
                                @if($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">    
                                <input type="text" class="form-control" placeholder="Mobile No.:" name="mobile_number" id="name"> 
                                @if($errors->has('mobile_number'))
                                    <div class="text-danger">{{ $errors->first('mobile_number') }}</div>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="textarea form-group W-100">    
                                <textarea class="form-control "  placeholder="Message:" rows="3" name="message" id="comments"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn  appointment-btn">Make Appointment</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 float-left slider-con text-lg-left text-center">
            <div class="container">
                <div class="slider-inner-con banner-overlay-img testimonials">
                    <div class="row overlay-img">
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="slider-left-con">
                            <h2 class="text-white">What Our <br>
                                Patients Say About
                                Our Services
                            </h2>
                            <p class="mb-0">4.8 Overall Rating, Based<br>
                                on 2500+ Reviews.
                            </p>
                        </div>
                    </div>
                    @if (isset($data['testimonials_list']) && $data['testimonials_list']->count() > 0)
                        <div class="col-lg-8">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                            <!-- data-interval="true" -->
                                <div class="carousel-inner">
                                @php
                                    $sr_no = 1;
                                @endphp
                                @foreach($data['testimonials_list'] as $testimonials_list)
                                @php
                                if($sr_no =='1') { 
                                    $testimonials_class ='active';
                                }else{
                                    $testimonials_class ='';
                                }
                                @endphp
                                    <div class="carousel-item {{$testimonials_class}}">
                                        <div class="auther-con w-100 d-inline-block">
                                            <figure class="mb-0 d-inline-block testimonial_img">
                                                <img src="{{ asset('testimonials-img/main-img/' . $testimonials_list->profile_image) }}" alt="auther-img" class="img-fluid">
                                            </figure>
                                            <div class="auther-title d-inline-block">
                                                <h4 class="text-white">{{$testimonials_list->name}}</h4>
                                                <!--<p class="mb-0">Dental Patient</p>-->
                                            </div>
                                        </div>
                                        <p class="text-white mb-0">{{$testimonials_list->testimonials_content}}</p>
                                    </div>
                                    @php
                                        $sr_no++; 
                                    @endphp
                                    @endforeach
                                    <!-- <div class="carousel-item">
                                        <div class="auther-con w-100 d-inline-block">
                                            <figure class="mb-0 d-inline-block">
                                                <img src="{{asset('fronted/image/auther-img.png')}}" alt="auther-img" class="img-fluid">
                                            </figure>
                                            <div class="auther-title d-inline-block">
                                                <h4 class="text-white">Victoria Sullivan</h4>
                                                <p class="mb-0">Dental Patient</p>
                                            </div>
                                        </div>
                                        <p class="text-white mb-0">Seram ipsum dolor sit amet consectetur adipiscing elit sed do eius mod tempor incididunt aenean leo ligula portti tor eu consequat vitae eleifend tac phasellus viverra nulla utm etus varius laoreetuisque rutrumenean imperdiet tiam ultri cies nisi vel augues mod tempor in.</p>
                                    </div> -->
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                    <i class="fas fa-arrow-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                    <i class="fas fa-arrow-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (isset($data['feature_logo_list']) && $data['feature_logo_list']->count() > 0)
    <div class="w-100 float-left logo-con video-pt-20">
        <div class="container text-center my-3">
            <div class="text-center">
                <h2>Featured in</h2>
            </div>
            <div class="row mx-auto my-auto justify-content-center">
                <div class="carousel-wrap">
                    <div class="owl-carousel owl-theme">
                    @foreach($data['feature_logo_list'] as $image_list_id)
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                    
                                    <img src="{{ asset('feature-logo/main-img/' . $image_list_id->img_file) }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection