@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    
@stop

@section('content')
<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edit Profile</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" action="{{route('user.update')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{$user->name}}"   name="name" class="form-control" placeholder="{{$user->name}}">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="{{$user->email}}" >
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="If you dont want to change, let this input empty" >
              </div>

            </div>
            <div class="col-sm-6">
              <label>Action</label>
     	              <button type="submit" class="btn btn-block bg-gradient-warning">Save</button>

            </div>
          </div>

	   </form>
      </div>
      <!-- /.card-body -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
