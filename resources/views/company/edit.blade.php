@extends('adminlte::page')

@section('title', 'Add Company')

@section('content_header')

@stop

@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit a Company</h3>
    </div>
    <form role="form" method="POST" action="{{route('company.update', ['id'=>$company->id])}}"
      enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="{{$company->name}}"
            value="{{$company->name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name="email" placeholder="{{$company->email}}"
            value="{{$company->email}}">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Enter image logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">{{$company->logo}}</label>

            </div>
            <a type="button" class="btn btn-primary" href="/storage/{{$company->logo}}">Visualizar</a>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Website</label>
            <input type="text" class="form-control" name="website" placeholder="{{$company->website}}"
              value="{{$company->website}}">
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

  @stop

  @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
  @stop

  @section('js')
  <script>
    console.log('Hi!'); 
  </script>
  @stop