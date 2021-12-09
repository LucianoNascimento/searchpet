<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Bem vindo ao Sistema de Adoção de Animais</title>
</head>
<body>
<div id="app">
    <mapa/>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
