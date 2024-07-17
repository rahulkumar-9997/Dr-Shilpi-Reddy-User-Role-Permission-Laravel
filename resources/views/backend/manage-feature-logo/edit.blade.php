@extends('backend.layouts.master')
@section('title','Manage feature logo')
@section('main-content')
{{--@dd(Auth::check());--}}

<section id="main-content" class=" ">
   <section class="wrapper main-wrapper" style=''>
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
                <a href="{{route('manage-feature-logo.add')}}" class="btn btn-warning btn-sm" style="margin-top: 20px;">Add feature logo</a>             
            </div>
            <div class="pull-right hidden-xs">
               <ol class="breadcrumb">
                  <li>
                     <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                  </li>
                  <li>
                     <a href="{{route('manage-feature-logo')}}"><i class="fa fa-home"></i>Manage Feature logo</a>
                  </li>
                  
                  <li class="active">
                     <strong>Update feature logo</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Update feature logo</h2>
               <div class="actions panel_actions pull-right">
                  <i class="box_toggle fa fa-chevron-down"></i>
                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                  <i class="box_close fa fa-times"></i>
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <form action="{{ route('manage-feature-logo.update') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                        <input type="hidden" name="feature_logo_id_hidden" value="{{ $feature_logo->id }}">
                        <div class="form-group">
                           <label class="form-label" for="field-1">Upload Image</label>
                           <br><img src="{{ asset('feature-logo/thumb/' . $feature_logo->img_file) }}" style="width: 100px;">
                           <div class="controls">
                              <input type="file" class="form-control" name="update_image_file">
                           </div>
                           @if($errors->has('update_image_file'))
                              <div class="text-danger">{{ $errors->first('update_image_file') }}</div>
                           @endif
                        </div>
                        <div class="form-group">
                           <div class="controls">
                              <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </section>
</section>
@endsection
