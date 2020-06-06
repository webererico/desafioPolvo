@extends('adminlte::page')

@section('title', 'Add Company')

@section('content_header')

@stop

@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Register a new Company</h3>
    </div>
    <form role="form" method="POST" action="{{route('company.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Enter image logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Website</label>
            <input type="text" class="form-control" name="website" placeholder="Enter website">
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
  @stop

  @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
  @stop

  @section('js')
  <script>
    console.log('Hi!'); 
  </script>
  @stop