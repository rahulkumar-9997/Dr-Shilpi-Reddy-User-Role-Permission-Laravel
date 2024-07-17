@extends('backend.layouts.master')
@section('title','Manage Media Images')
@section('main-content')
{{--@dd(Auth::check());--}}
@section('morecss')
<link href="{{asset('backend/assets//plugins/datatables/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" media="screen"/>    
@endsection
<section id="main-content" class=" ">
   <section class="wrapper main-wrapper">
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
                <a href="{{route('manage-media.add')}}" class="btn btn-warning btn-sm" style="margin-top: 20px;">Add Media Images</a>             
            </div>
            <div class="pull-right hidden-xs">
               <ol class="breadcrumb">
                  <li>
                     <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                  </li>
                  
                  <li class="active">
                     <strong>Manage Media Images</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Manage Media Images</h2>
               <div class="actions panel_actions pull-right">
                  <i class="box_toggle fa fa-chevron-down"></i>
                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                  <i class="box_close fa fa-times"></i>
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  @if (isset($data['media_image_list']) && $data['media_image_list']->count() > 0)
                     <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Image</th>
                              <th>Image Title</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        
                        <tbody>
                        @php
                           $sr_no = 1;
                        @endphp
                        @foreach($data['media_image_list'] as $image_list_id)
                           <tr>
                              <td>{{ $sr_no }}</td>
                              <td>
                              <img src="{{ asset('media-img/thumb/'. $image_list_id->media_image) }}" style="width: 50px;">
                              </td>
                              <td>
                                 {{$image_list_id->title}}
                              </td>
                              <td>
                                 <a href="{{url('manage-media/edit/'.$image_list_id->id.'') }}" class="btn btn-primary btn-sm">
                                    <span>Edit</span>  &nbsp; <i class="fa fa-angle-double-right"></i>
                                 </a>
                                 <a href="{{url('manage-media/delete/'.$image_list_id->id.'') }}" class="btn btn-primary btn-sm">
                                    <span>Delete</span>  &nbsp; <i class="fa fa-angle-double-right"></i>
                                 </a>
                                 
                              </td>
                             
                           </tr>
                           @php
                              $sr_no++; 
                           @endphp
                        @endforeach
                        </tbody>
                     </table>
                     @endif
                  </div>
               </div>
            </div>
         </section>
      </div>
      
      
      
   </section>
</section>
@endsection
@section('morescripts')
<script src="{{asset('backend/assets/plugins/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js')}}" type="text/javascript">

</script>
@endsection