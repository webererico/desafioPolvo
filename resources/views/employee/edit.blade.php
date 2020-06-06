@extends('adminlte::page')

@section('title', 'Add Employee')

@section('content_header')

@stop

@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit an Employee</h3>
    </div>
    <form role="form" method="POST" action="{{route('employee.update', ['id'=> $employee->id])}}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" placeholder="{{$employee->firstName}}" value="{{$employee->firstName}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Last Name</label>
          <input type="text" class="form-control" name="lastName" placeholder="{{$employee->lastName}}" value="{{$employee->lastName}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name="email" placeholder="{{$employee->email}}" value="{{$employee->email}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="text" class="form-control" name="phone" placeholder="{{$employee->phone}}" value="{{$employee->phone}}">
        </div>
        <div class="form-group">
          <label>Select Company</label>
          <select class="form-control" name="company_id">
            @foreach($companies as $company)
            @if($company->id == $employee->company_id)
            <option name='company_id' value="{{$company->id}}" selected>{{$company->name}}</option>
            @else
            <option name='company_id' value="{{$company->id}}">{{$company->name}}</option>
            @endif
          @endforeach
          </select>
  
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
    <script> console.log('Hi!'); </script>
@stop