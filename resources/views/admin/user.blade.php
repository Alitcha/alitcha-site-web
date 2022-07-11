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
                <h3 class="card-title">Users</h3>

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
                      <th>Rôle</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->firstname}} </td>
                            <td>{{$user->email}} @if($user->email === Auth::user()->email) <span class="badge bg-info ml-1">vous</span> @endif</td>

                            <td>
                              @if($user->isAdmin() or $user->isEditor())
                               <span class="badge bg-success"> {{$user->role()}} </span>
                                @endif
                            </td>
                            

                           
                            
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
         
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