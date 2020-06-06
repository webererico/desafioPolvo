@extends('adminlte::page')

@section('title', 'Add Employee')

@section('content_header')

@stop

@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Register a new Employee</h3>
    </div>
    <form role="form" method="POST" action="{{route('employee.store')}}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Last Name</label>
          <input type="text" class="form-control" name="lastName" placeholder="Enter last name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
        </div>
        <div class="form-group">
          <label>Select Company</label>
          <select class="form-control" name="company_id">
            @foreach($companies as $company)
          <option name='company_id' value="{{$company->id}}">{{$company->name}}</option>
          @endforeach
          </select>
  
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
    <script> console.log('Hi!'); </script>
@stop