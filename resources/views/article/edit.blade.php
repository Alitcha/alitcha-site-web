@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
        <div class="col-md-10 offset-md-1 ">
            <form method="post" action="{{ route('articles.update',$article->id) }}">
                @csrf
                @method('put')
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            
                    
                <div class="from-group mb-2">
                <input id="titre" name="titre" class="form-control  @error('titre') is-invalid @enderror" placeholder="Titre" type="input" name="content" value="{{ old('titre',$article->titre) }}" />
                @error('titre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
                
            
                <div class="from-group mb-2">
                    <textarea id="contenu" type="hidden" name="contenu">
                    {{ old('contenu',$article->contenu) }}
                    </textarea>
                    <!-- <input id="contenu" type="hidden" name="contenu" value="{{ old('contenu') }}" /> -->
                    @error('contenu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    <!--<trix-editor input="contenu" class="trix-content"></trix-editor>-->
                </div>
                <input type="submit" name="submit" value="Sauvegarder" class="btn btn-primary"/>
            </form>
        </div>
       
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
@stop

@section('js')
<script src="https://cdn.tiny.cloud/1/ii55vmuwsr4ox819yjuuyda651l53xnp90lx4dbt3zky9jeu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'blocks backcolor forecolor a11ycheck addcomment format showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
      
    <script src="{{ asset('js/trix.js') }}"></script>
    <script src="{{ asset('js/attachments.js') }}"></script>
@stop

