@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
<div class="row">
    <div class="col-md-3">
        <h1>Registered Companies</h1>
    </div>
    <div class="col-md-3">
        <a type="button" href="{{route('company.create')}}" class="btn btn-block bg-gradient-success btn-sm">Add new
            company</a>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All informations</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-2">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>logo</th>
                    <th style="width: 40px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->website}}</td>
                <td><a href="/storage/{{$company->logo}}"><i
                    class="fas fa-image"></i></a></td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('company.edit',['id'=>$company->id])}}" type="button" class="btn btn-default btn-flat"><i
                                    class="fas fa-edit"></i></a>
                            <a href="{{route('company.destroy',['id'=>$company->id])}}" type="button" class="btn btn-default btn-flat"><i
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
{{ $companies->links() }}
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
