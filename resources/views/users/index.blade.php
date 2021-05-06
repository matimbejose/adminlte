@extends('adminlte::page')

@section('title', 'Usuarios do sistema')

@section('content_header')
    <h1>Usuarios </h1>

@stop

@section('content')
    <div id="app">
        <home-users />
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop