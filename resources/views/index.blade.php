<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--<base href="/" />--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="login-status" content="{{ Auth::check() }}">
    @auth
        <meta name="api-token" content="{{ Auth::user()->api_token }}">
    @endauth

    <title>Photografolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    {{--<noscript><meta http-equiv="refresh" content="0; URL={{url('badbrowser')}}"></noscript>--}}
    <noscript>Please Enable JavaScript and refresh in order to view page.</noscript>
</head>
<body>
<div id="app">
    <app></app>
</div>
{{--<script type="text/javascript" src="js/app.js"></script>--}}
<script type="text/javascript" src="{{asset('js/vueapp.js')}}"></script>
</body>
</html>