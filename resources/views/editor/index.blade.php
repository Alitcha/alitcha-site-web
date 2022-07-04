@extends('adminlte::page')

@section('title', '')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@if (session()->has('message'))
                <div class="alert alert-info" role="alert">
                    
                      {{ session('message') }}
                </div>
            @endif
<div class="card">

              <div class="card-header border-transparent">
                <h3 class="card-title">Les éditeurs</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($editors as $editor)
                        <tr>
                            <td>{{$editor->lastname}}</td>
                            <td>{{$editor->firstname}}</td>
                            <td>{{$editor->email}}  @if($editor->email === Auth::user()->email) <span class="badge bg-info ml-1">vous</span> @endif</td>

                            <td>
                                @if(Auth::user()->isAdmin())
                                <a role="button" class="btn btn-danger btn-sm"
                                onclick="event.preventDefault(); document.getElementById('destroy{{ $editor->id }}').submit();">
                                Démettre</a>
                                @endif
                            </td>
                            @if(Auth::user()->isAdmin())
                            <form id="destroy{{ $editor->id }}" action="{{ route('editor.remove',$editor->id) }}" method="POST" style="display: none;">
                                @csrf
                                <!-- @method('DELETE')-->
                            </form>
                            @endif

                           
                            
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
              <div class="card-footer clearfix">
              @if(Auth::user()->isAdmin())
                <a href="{{route('editor.add')}}" class="btn btn-sm btn-secondary float-left">Nommer un éditeur</a>
                @endif  
            </div>
              
              <!-- /.card-footer -->
            </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>

    <script> console.log('Hi!'); </script>
@stop