@extends('adminlte::page')

@section('title', 'Images')

@section('content_header')
    <h1>Images</h1>
@stop

@section('content')
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Erreur lors de l'ajout
                    </div>
                @endif
              <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                  <div class="mt-3">
                    <label for="formFile" class="form-label">Ajouter une nouvelle image</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" id="formFile" name="image">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ajouter</button>
                    </div>
                  </div>
                
              </form>
            </div>
            <hr class="m-2">
            <div class="row">
                  @foreach($images as $img)
                    <div class="col-md-3">
                        <img src="{{asset('images/'.$img->path_name)}}" class="img-thumbnail" alt="..." max-height="200px">
                    </div>
                  @endforeach
            </div>
            
            
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('js')

@stop

