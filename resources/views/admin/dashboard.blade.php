@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if(!Auth::user()->isAdmin() && !Auth::user()->isEditor())
    <x-adminlte-callout theme="info" title="Info">
        Vous n'avez aucun rôle pour le moment. Demandez à être nommé éditeur ou admin ou connectez vous à un autre compte. <br>
        Merci
        
        <a class=""  href="/admin/request">
            <button  class="btn  btn-primary d-block mt-1 btn-sm"  >
                Faire la demande
            </button>
        </a>
        
    </x-adminlte-callout>
    @else

    <div class="row">
    <div class="col-md-4">
        <x-adminlte-small-box title="{{$nbusers}}" text="Inscriptions" icon="fas fa-user-plus text-teal"
    theme="primary" url="{{route('users.list')}}" url-text="Voirs tous les utilisateurs"/>
    </div>
    <div class="col-md-4">
    <x-adminlte-small-box title="{{$nbpub}}" text="Articles publiés" icon="fas fa-file text-white"
    theme="teal" url="{{route('article.index')}}" url-text=""/>
    </div>
    <div class="col-md-4">
    <x-adminlte-small-box title="{{$nbunpub}}" text="Articles en cours d'édition" icon="fas fa-file text-dark"
    theme="danger" url="{{route('article.index')}}" url-text="" id=""/>
    </div>
    
    </div>
    @endif
    
@stop
@push('js')
<script>

   /* $(document).ready(function() {

        let sBox = new _AdminLTE_SmallBox('sbUpdatable');

        let updateBox = () =>
        {
            // Stop loading animation.
            sBox.toggleLoading();

            // Update data.
            let rep = Math.floor(1000 * Math.random());
            let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
            let text = 'Reputation - ' + ['Basic', 'Silver', 'Gold'][idx];
            let icon = 'fas fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
            let url = ['url1', 'url2', 'url3'][idx];

            let data = {text, title: rep, icon, url};
            sBox.update(data);
        };

        let startUpdateProcedure = () =>
        {
            // Simulate loading procedure.
            sBox.toggleLoading();

            // Wait and update the data.
            setTimeout(updateBox, 2000);
        };

        setInterval(startUpdateProcedure, 10000);
    })*/

</script>
@endpush


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
    <script> console.log('Hi!'); </script>
@stop