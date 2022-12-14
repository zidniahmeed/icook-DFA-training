@extends('layouts.main')

@section('title', 'video')
@section('heading', 'video')
@section('breadcrumb', 'video')

@section('content')


<a href="/createvideo" class="btn btn-outline-primary">add video</a>

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
          <th>resep</th>
          <th>video</th>
          <th>Action</th>
        </tr>
        </thead>      
        <tbody>

          @php
              $no = 1
          @endphp

          
          @foreach ( $video as $data )
              
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->Resep->judul ?? null }}</td>
            <td>
              {{$data->video}}
              <x-embed url="{{ $data->video }}" aspect-ratio="4:3" />            
            </td>
            <td>
              <a href="/editvideo/{{$data->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              
              <a onclick="return confirm('delete data')" href="/deletevideo/{{$data->id}}" class="btn btn-outline-danger">
                <i class="fa-solid fa-trash"></i>
              </a>
              
            </td>
          </tr>
          @endforeach

        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection