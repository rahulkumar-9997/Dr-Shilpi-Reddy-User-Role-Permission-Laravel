@php 
use App\Models\OurWorkImage;
@endphp
@extends('frontend.layouts.master')
@section('title','Our Work - Dr. K Shilpireddy')
@section('description', 'Share text and photos with your friends and have fun')
<!-- @section('keywords', 'sharing, sharing text, text, sharing photo, photo,') -->

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
                            <h1>Work</h1>
                            <!-- <p class="text-white mb-0">Business and Organizations By Dr.K. Shilpi Reddy</p> -->
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
                @if (isset($data['our_work_list']) && $data['our_work_list']->count() > 0)
                    <div class="row">
                        <!--<div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                    <a href="work-detail.php">
                                    <img alt="" src="{{asset('fronted/shilpi-img/work-img.webp')}}">
                                    </a>
                                    </div>
                                    <div class="post-item-description">
                                    <h2>
                                        <a href="work-detail.php">Womens Wings(RERF) Brahma Kumaris</a>
                                    </h2>
                                    <p>
                                        Experience a month brimming with inspiration and transformation! 
                                        From July 30th to September 16th, 2023.
                                    </p>
                                    <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        @foreach($data['our_work_list'] as $our_work_list_row)
                        @php 
                            $our_work_multiple_image = OurWorkImage::where(['our_work_id' => $our_work_list_row->id])->get();
                        @endphp
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div id="blogslider" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                    @php 
                                        $sr_no = 1;
                                    @endphp
                                    @foreach($our_work_multiple_image as $our_work_image_row) 
                                        @php 
                                            if($sr_no ==1){
                                                $class_active = 'active';
                                            }else{
                                                $class_active ='';
                                            }
                                        @endphp
                                        <div class="carousel-item {{$class_active}}">
                                            <img src="{{ asset('our-work/main-img/' . $our_work_image_row->our_work_image) }}" alt="">
                                        </div>
                                        @php 
                                        $sr_no++;
                                        @endphp
                                    @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#blogslider" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#blogslider" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                    </a>
                                    </div>
                                    <div class="post-item-description">
                                    <h2>
                                        <a href="{{url('work/'.$our_work_list_row->slug.'') }}">{{$our_work_list_row->heading_name}}</a>
                                    </h2>
                                    <p>{!! substr($our_work_list_row->our_work_content, 0, 150) !!}</p>
                                    <a href="{{url('work/'.$our_work_list_row->slug.'') }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @endif
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 float-left professional-con-padding work_banner_page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="quality-system-left-con">
                            <h3>
                            I belive in the moffo of servicing my community with hand work and awareness about the correct knowledge
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
   <div class="w-100 float-left quality-system-con Experince-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 image_grid">
               <div class="quality-system-right-con position-relative text-center overlay-img">
                  <figure class="mb-0">
                     <img src="{{asset('fronted/shilpi-img/work_bottom_1.webp')}}" alt="professional-doctor-img" class="img-fluid">
                  </figure>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 image_grid">
               <div class="quality-system-right-con position-relative text-center overlay-img">
                  <figure class="mb-0">
                     <img src="{{asset('fronted/shilpi-img/work_bottom_2.webp')}}" alt="professional-doctor-img" class="img-fluid">
                  </figure>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 image_grid">
               <div class="quality-system-right-con position-relative text-center overlay-img">
                  <figure class="mb-0">
                     <img src="{{asset('fronted/shilpi-img/work_bottom_3.webp')}}" alt="professional-doctor-img" class="img-fluid">
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>   
@endsection