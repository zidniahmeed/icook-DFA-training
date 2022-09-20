@extends('layouts.main')
@section('content')

<form method="post" action="/insertcategory">

    @csrf

<div class="container">
    <div class="row">
        <div class="col-4">

            <div class="mb-3">
                <label  class="form-label">category</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>


  </form>
@endsection