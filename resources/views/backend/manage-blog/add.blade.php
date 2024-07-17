@extends('backend.layouts.master') 
@section('title','Add new blog') 
@section('main-content') 
{{--@dd(Auth::check());--}}
@section('morecss')
<link href="{{asset('backend/assets/plugins/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/uikit/css/components/htmleditor.css')}}" rel="stylesheet" type="text/css" media="screen"/>


<link href="{{asset('backend/assets/plugins/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/uikit/css/uikit.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/uikit/vendor/codemirror/codemirror.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/uikit/css/components/htmleditor.css')}}" rel="stylesheet" type="text/css" />
@endsection
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{route('manage-blog')}}"><i class="fa fa-home"></i>Manage Blog</a>
                        </li>

                        <li class="active">
                            <strong>Add New Blog</strong>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Add New Blog</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form action="{{ route('manage-blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Blog Title</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="blog_title">
                                            </div>
                                            @if($errors->has('blog_title'))
                                            <div class="text-danger">{{ $errors->first('blog_title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Blog Image (Select Multiple Image (Limit 20 images))</label>
                                            <div class="controls">
                                                <input type="file" class="form-control" name="blog_image[]" multiple>
                                            </div>
                                            @if($errors->has('blog_image'))
                                            <div class="text-danger">{{ $errors->first('blog_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Blog Description</label>
                                            <div class="controls">
                                            <textarea class="bootstrap-wysihtml5-textarea" placeholder="Enter text ..." style="width: 100%; height: 250px; font-size: 14px; line-height: 23px;padding:15px;" name="blog_description"></textarea>
                                            </div>
                                            @if($errors->has('blog_description'))
                                            <div class="text-danger">{{ $errors->first('blog_description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <div class="controls">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                       </div>
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

@section('morescripts')
<script src="{{asset('backend/assets/plugins/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('backend/assets/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
		<script src="{{asset('backend/assets/plugins/uikit/js/uikit.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('backend/assets/plugins/uikit/vendor/codemirror/codemirror.js')}}" type="text/javascript"></script>
		<script src="{{asset('backend/assets/plugins/uikit/vendor/codemirror/codemirror.js')}}" type="text/javascript"></script>
		<!-- <script src="{{asset('backend/assets/plugins/uikit/vendor/codemirror/mode/markdown/markdown.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/uikit/vendor/codemirror/addon/mode/overlay.js')}}"></script> -->
		<!-- <script src="{{asset('backend/assets/plugins/uikit/vendor/codemirror/mode/xml/xml.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/uikit/vendor/codemirror/mode/gfm/gfm.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/uikit/vendor/marked/marked.min.js')}}" type="text/javascript"></script> -->
		<script src="{{asset('backend/assets/plugins/uikit/js/components/htmleditor.js')}}" type="text/javascript"></script>





@endsection