@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard. Hello {{$user->name}}  </h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-6 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$companies}}</h3>

          <p>Companies </p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
          
        </div>
        <a href="{{route('company.index')}}" class="small-box-footer">Acess</a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-6 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$employees}}</h3>

          <p>Employees</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{route('employee.index')}}" class="small-box-footer">Acess</a>
      </div>
    </div>
  
    <!-- ./col -->
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop