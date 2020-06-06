@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
<div class="row">
    <div class="col-md-4">
        <h1>Registered Employees</h1>
    </div>
    <div class="col-md-3">
        <a type="button" href="{{route('employee.create')}}" class="btn btn-block bg-gradient-success btn-sm">Add new
            Employee</a>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All information</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-2">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th style="width: 40px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    @foreach($companies as $company)
                        @if($company->id == $employee->company_id)
                            <td>{{$company->name}}</td>
                        @endif
                    @endforeach
                    <td>
                        <div class="btn-group">
                            <a href="{{route('employee.edit', ['id'=>$employee->id])}}" type="button" class="btn btn-default btn-flat"><i
                                    class="fas fa-edit"></i></a>
                            <a href="{{route('employee.destroy',['id'=>$employee->id])}}" type="button" class="btn btn-default btn-flat"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    @endforeach

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
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