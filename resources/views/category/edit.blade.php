@extends('layouts.main')

@section('title', 'edit category')
@section('heading', 'edit category')
@section('breadcrumb', 'edit category')


@section('content')

<form method="post" action="/updatecategory/{{$category->id}}">
    @csrf
    
<div class="container">
    <div class="row">
        <div class="col-4">

            <div class="mb-3">
                <label  class="form-label">category</label>
                <input type="text" class="form-control" value="{{$category->category}}" name="name" >
            </div>
            <button type="submit" class="btn btn-primary">Submit<button>
        </div>
    </div>
</div>

    
  </form>
@endsection