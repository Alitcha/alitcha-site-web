@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
        <div class="col-md-10 offset-md-1 ">
            <form method="post" action="{{ route('article.store') }}">
                @csrf
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            
                    
                <div class="from-group mb-2">
                <input id="title" name="title" class="form-control  @error('titte') is-invalid @enderror" placeholder="Titre" type="input" name="content" value="{{ old('title') }}" />
                @error('titre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
                
            
                <div class="from-group mb-2">
                    <textarea id="content" type="hidden" name="content">
                    {{ old('content') }}
                    </textarea>
                    <!-- <input id="content" type="hidden" name="content" value="{{ old('content') }}" /> -->
                    @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    <!--<trix-editor input="content" class="trix-content"></trix-editor>-->
                </div>
                <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary"/>
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
      plugins: 'a11ychecker advcode advlist casechange export formatpainter image editimage  autolink help lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents  tinymcespellchecker',
      toolbar: 'undo redo  blocks bold italic forecolor backcolor fontsize  font alignleft  aligncenter alignright alignjustify help| bullist numlist outdent indent | format  casechange checklist code  image editimage table formatpainter',
      toolbar_mode: 'floating',
      
    });
  </script>
      
    
@stop

