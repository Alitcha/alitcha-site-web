@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<x-adminlte-callout theme="warning" title="Warning">
    Warning theme callout!
</x-adminlte-callout>
    <div class="row">
    <div class="col-md-4">
        <x-adminlte-small-box title="{{$nbusers}}" text="User Registrations" icon="fas fa-user-plus text-teal"
    theme="primary" url="{{route('users.list')}}" url-text="View all users"/>
    </div>
    <div class="col-md-4">
    <x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
    theme="teal" url="#" url-text="View details"/>
    </div>
    <div class="col-md-4">
    <x-adminlte-small-box title="0" text="Reputation" icon="fas fa-medal text-dark"
    theme="danger" url="#" url-text="Reputation history" id="sbUpdatable"/>
    </div>
    
    </div>
    
@stop
@push('js')
<script>

    $(document).ready(function() {

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
    })

</script>
@endpush


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
    <script> console.log('Hi!'); </script>
@stop