@extends('layouts.main')

@section('title', 'resep')
@section('heading', 'resep')
@section('breadcrumb', 'resep')

@section('content')

<a href="/createresep" class="btn btn-outline-primary">add resep</a>

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
          <th>id category</th>
          <th>judul</th>
          <th>resep</th>
          <th>images</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>

          @php
              $no = 1
          @endphp
          
          @foreach ( $resep as $row )
            <tr>
                <td>{{ $no++ }}</td>

                <td>{{$row->Category->name ?? null}}</td>
                
                <td>{{$row->judul ?? null }}</td>
                <td> {{ $row->resep ?? null }}</td>
                <td> 
                  <img src="/resep_images/{{ $row->images ?? null }}" width="100" alt=""> 
                </td>
                <td>
                    <a href="/editresep/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="/deleteresep/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('delete data')" ><i class="fa-solid fa-trash"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection