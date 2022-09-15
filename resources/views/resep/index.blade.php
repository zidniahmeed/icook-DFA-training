@extends('layouts.main')
@section('content')

<a href="/createresep" class="btn btn-outline-primary">add resep</a>


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
                <td>{{$row->id_category}}</td>
                <td>{{$row->judul }}</td>
                <td> {{ $row->resep }}</td>
                <td> {{ $row->images }}</td>
                <td>
                    <a href="/editresep" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection