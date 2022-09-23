@extends('layouts.main')

@section('title', 'user')
@section('heading', 'user')
@section('breadcrumb', 'user')

@section('content')

@php
$role = Auth::user()->role ?? null 
@endphp

@if ( $role == 'admin')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    	<p>{{ $message }}</p>
</div>
@endif
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>

          <th>email</th>
          <th>name</th>
          <th>role</th>
          
          <th>Action</th>
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          @foreach ( $user as $data )
              
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->role }}</td>
            <td>
              <a href="/edituser/{{$data->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a> 
              <a href="/deletevideo/{{$data->id}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
              
            </td>
          </tr>
          @endforeach

        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  @else
<h1>anda bukan admin</h1>
@endif

@endsection