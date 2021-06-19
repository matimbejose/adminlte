@extends('adminlte::page')

@section('title', 'Usuarios do sistema')

@section('content_header')
    <h1>Usuarios </h1>

@stop

@section('content')
    <h1>HELLO WORD !!! </h1>
    @foreach($estudantes as $u)
    <p>{{$u->name}} | {{$u->disciplinas}}| {{ $u->phone}}</p>
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop