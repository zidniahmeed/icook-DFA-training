@extends('layouts.main')
@section('content')

<a href="/createvideo" class="btn btn-outline-primary">add video</a>


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
          <th>video</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>chicken</td>
                <td>
                    <a href="/editvideo" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>

                </td>
            </tr>
        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection