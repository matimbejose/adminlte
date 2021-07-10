@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 

@stop

@section('content')
    <div id="app">
        <home-dashboard />
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop
