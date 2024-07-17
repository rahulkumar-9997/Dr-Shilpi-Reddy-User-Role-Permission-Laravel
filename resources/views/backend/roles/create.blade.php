@extends('backend.layouts.master')
@section('title','Create Role')
@section('main-content')
{{--@dd(Auth::check());--}}

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
                     <a href="{{ route('users') }}"><i class="fa fa-home"></i>User</a>
                  </li>
                  
                  <li class="active">
                     <strong>Create a new Role</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Create a new Role</h2>
               <div class="actions panel_actions pull-right">
                  <i class="box_toggle fa fa-chevron-down"></i>
                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                  <i class="box_close fa fa-times"></i>
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="form-group">
                           <label for="name" class="form-label">Role Name</label>
                           <input type="text" 
                                 class="form-control" 
                                 name="name" 
                                 placeholder="Name">
                           @if($errors->has('name'))
                              <div class="text-danger">{{ $errors->first('name') }}</div>
                           @endif
                        </div>

                        <label for="permissions" class="form-label">Assign Permissions</label>
                        @if($errors->has('permission'))
                              <div class="text-danger">{{ $errors->first('permission') }}</div>
                           @endif
                        <table class="table table-striped">
                           <thead>
                                 <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                 <th scope="col" width="20%">Name</th>
                                 <th scope="col" width="1%">Guard</th> 
                           </thead>

                           @foreach($permissions as $permission)
                                 <tr>
                                    <td>
                                       <input type="checkbox" 
                                       name="permission[{{ $permission->name }}]"
                                       value="{{ $permission->name }}"
                                       class='permission'>
                                    </td>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->guard_name }}</td>
                                 </tr>
                           @endforeach
                        </table>

                        <button type="submit" class="btn btn-primary">Submit</button>
                       
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }

            });
        });
    </script>
@endsection