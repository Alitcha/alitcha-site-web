@extends('adminlte::page')

@section('title', '')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            @if (session()->has('message'))
                <div class="alert alert-info" role="alert">
                      {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-secondary">Ajout d'éditeur</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('editor.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail de l'éditeur à nommer</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>

                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>

    <script> console.log('Hi!'); </script>
@stop
