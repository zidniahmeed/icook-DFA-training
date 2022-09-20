@extends('layouts.main')
@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success">
    	<p>{{ $message }}</p>
</div>
@endif


<a href="/createcategory" class="btn btn-outline-primary">add category</a>


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
          <th>Category</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        
          @php
              $no = 1
          @endphp
          @foreach ( $category as $row )
            <tr>
                <td>{{ $no++ }}</td>
                <td>  {{ $row->name ?? null }}  </td>
                <td>
                    <a href="/editcategory/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="/deletecategory/{{$row->id}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>

                </td>
            </tr>
            @endforeach

        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection