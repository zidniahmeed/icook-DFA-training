@extends('layouts.main')

@section('title', 'edit user')
@section('heading', 'edit user')
@section('breadcrumb', 'edit user')

@section('content')
@php
$role = Auth::user()->role ?? null 
@endphp

@if ( $role == 'admin')


<form action="/updateuser/{{$user->id}}" method="post" enctype="multipart/form-data">

@csrf

<div class="container">
    <div class="row">
        <div class="col-4">
            
            <div class="mb-3">
                <label  class="form-label">role</label>

                @php
                    $role = $user->role
                @endphp

                <select class="form-control" name="role" required>
                    <option value="admin" {{$role === 'admin' ? 'selected="selected"' : ''}} > admin </option>
                    <option value="user" {{ $role === 'user' ? 'selected="selected"' : '' }} > user </option>
                </select>
            </div>
            
            <div class="mb-3">
                <label  class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" readonly>
            </div>


            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly>
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