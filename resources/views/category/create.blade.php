@extends('layouts.main')

@section('title', 'create category')
@section('heading', 'create category')
@section('breadcrumb', 'create category')


@section('content')
@php
$role = Auth::user()->role ?? null 
@endphp

@if ( $role == 'admin')

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
  
  @else
  <h1>anda bukan admin</h1>
  @endif
  
  
@endsection