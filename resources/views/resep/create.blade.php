@extends('layouts.main')

@section('title', 'create resep')
@section('heading', 'create resep')
@section('breadcrumb', 'create resep')


@section('content')
<form action="/insertresep" method="post" enctype="multipart/form-data">

    @csrf

<div class="container">
    <div class="row">
        <div class="col-4">



            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

            <div class="mb-3">
                <label  class="form-label">category</label>
                <select class="form-control" name="id_category" required>

                    <option value="">select category</option>
                    
                    @foreach (App\Models\Category::get() as $item)
                        <option value="{{$item->id}}"> 
                            {{$item->name}}
                        </option>
                    @endforeach
        
                </select>
            </div>
            
            <div class="mb-3">
                <label  class="form-label">judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">image</label>
                <input type="file" class="form-control" name="images" required> 
            </div>
            <div class="mb-3">
                <label class="form-label">resep</label>
                <textarea name="resep" id="" cols="40" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>


  </form>
@endsection