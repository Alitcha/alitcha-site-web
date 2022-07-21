@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
        @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            <div class="card mt-5">
                <div class="card-header">Liste des articles
                  <a href="{{ route('article.create') }}" role="button" class="btn btn-primary btn-sm float-right">Créer un article</a>
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Titre</th>
                          <th>Date création</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($articles as $article)
                          <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->created_at->format('d/m/Y') }}</td>
                           
                            <td><a href="{{ route('article.show', $article->id) }}" role="button" class="btn btn-primary btn-sm">Voir</a></td>
                            <td><a href="{{ route('article.edit', $article->id) }}" role="button" class="btn btn-warning btn-sm">Modifier</a></td>
                            @if($article->published)
                            <td>Publié</td>
                            @else
                            <td><a role="button" class="btn btn-success btn-sm"
                                onclick="event.preventDefault(); publish('publish{{ $article->id }}');">
                                Publier</a></td>
                            @endif
                            <td><a role="button" class="btn btn-danger btn-sm"
                                onclick="event.preventDefault(); deletefct('destroy{{ $article->id }}');">
                                Supprimer</a>
                            </td>
                            
                            
                            
                            <form id="destroy{{ $article->id }}" action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>


                            <form id="publish{{ $article->id }}" action="{{ route('article.publish', $article->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('PUT')
                            </form>
                            

                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
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
  <script>
      function deletefct(id)  {

      var result = confirm("Cet article sera supprimé définitivement !");

      if(result)  {
         
          document.getElementById(id).submit();
                               
      } 
      }

      function publish(id)  {

      var result = confirm("Cet article sera accessible à tout le monde !");

      if(result)  {
        
          document.getElementById(id).submit();
                              
      } 
      }
  </script>

@stop

