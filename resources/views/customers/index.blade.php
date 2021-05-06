@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes </h1>
    
@stop

@section('content')
    <div id="app">
        <list-customers />
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop