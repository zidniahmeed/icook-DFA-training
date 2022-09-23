@extends('layouts.main')

@section('title', 'setting')
@section('heading', 'setting')
@section('breadcrumb', 'setting')

@section('content')

<form action="/updatesetting/{{$user->id}}" method="post" enctype="multipart/form-data">

@csrf

<div class="container">
    <div class="row">
        <div class="col-4">
            
            
            <div class="mb-3">
                <label  class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>


            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

    
  </form>
@endsection