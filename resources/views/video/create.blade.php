@extends('layouts.main')

@section('title', 'create video')
@section('heading', 'create resep')
@section('breadcrumb', 'create resep')

@section('content')
<form action="/insertvideo" method="post" >
    @csrf
<div class="container">
    <div class="row">
        <div class="col-4">

            <input type="hidden" name="id_user" value=" {{Auth::user()->id}}">
            @php
                $id = Auth::user()->id;
            @endphp

            <div class="mb-3">
                <label  class="form-label">resep</label>
                <select class="form-control" name="id_resep" required>
                    <option value="">select resep</option>    
                                  
                    @foreach (App\Models\Resep::where('id_user', $id)->get(); as $item)
                        <option value="{{$item->id}}"> 
                            {{$item->judul}}
                        </option>
                    @endforeach
        
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">video</label>
                <input type="text" class="form-control" name="video" required>
            </div>
            
  
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

    
  </form>
@endsection