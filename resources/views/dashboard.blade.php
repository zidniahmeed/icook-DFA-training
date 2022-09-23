@extends('layouts.main')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
<h3>welcome {{Auth::user()->name}}</h3>


@php
$role = Auth::user()->role ?? null 
@endphp

@if ($message = Session::get('success'))
<div class="alert alert-success">
    	<p>{{ $message }}</p>
</div>
@endif

@if ( $role == 'admin')
<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        
              <h1 class="card-title font-weight-bold text-warning">Category</h1>
              <p class="card-text text-danger">
                Category : {{  App\Models\Category::count() }} 
              </p>
        
              <a href="/category" class="card-link">Category</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        
              <h1 class="card-title font-weight-bold text-warning">Resep</h1>
              <p class="card-text text-danger">
                Resep : {{  App\Models\Resep::count() }} 
              </p>
        
              <a href="/resep" class="card-link">Resep</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        
              <h1 class="card-title font-weight-bold text-warning">Video</h1>
              <p class="card-text text-danger">
                Video : {{  App\Models\Video::count() }} 
              </p>
        
              <a href="/video" class="card-link">Video</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        
              <h1 class="card-title font-weight-bold text-warning">User</h1>
              <p class="card-text text-danger">
                User : {{  App\Models\User::count() }} 
              </p>
        
              <a href="/user" class="card-link">User</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        
              <h1 class="card-title font-weight-bold text-warning">Resep</h1>
              <p class="card-text text-danger">
                Resep : {{  App\Models\Resep::count() }} 
              </p>
        
              <a href="/resep" class="card-link">Resep</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        
              <h1 class="card-title font-weight-bold text-warning">Video</h1>
              <p class="card-text text-danger">
                Video : {{  App\Models\Video::count() }} 
              </p>
        
              <a href="/video" class="card-link">Video</a>
            </div>
        </div>
    </div>
</div> 

@endif
@endsection