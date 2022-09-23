@extends('layouts.main')

@section('title', 'edit video')
@section('heading', 'edit resep')
@section('breadcrumb', 'edit resep')

@section('content')
<form method="post" action="/updatevideo/{{$video->id}}" >
    @csrf
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                
                <input type="hidden" name="id_user" value=" {{Auth::user()->id}}">

                <label  class="form-label">resep</label>
                <select class="form-control" name="id_resep" required>

                    <option value="{{$video->id}}">
                        {{$video->Resep->judul ?? null}}
                    </option>  
                    @php
                        $id = Auth::user()->id;
                    @endphp
                    
                    @foreach (App\Models\Resep::where('id_user', $id)->get(); as $item)
                        <option value="{{$item->id}}"> 
                            {{$item->judul ?? null}}
                        </option>
                    @endforeach
        
                </select>
            </div>

            <div class="mb-3">
                <label  class="form-label">video</label>
                <input type="text" class="form-control" name="video" value="{{$video->video}}">
            </div>
            
  
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

    
  </form>
@endsection