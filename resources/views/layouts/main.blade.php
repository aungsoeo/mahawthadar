<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mahawthadar') }}</title>
    

    <link rel="shortcut icon" href="{{ asset('images/demo/logo.jpeg') }}" type="image/jpeg">
    <link rel="icon" href="{{ asset('images/demo/logo.jpeg') }}" type="image/jpeg">
    
    @section('styles')
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    @show    

</head>
<body id="top" onload="RotateBanner()">

@include('layouts.common.header')

@yield('content')

@include('layouts.common.footer')


@section('scripts')
<script src="{{ asset('layout/scripts/jquery.min.js') }}"></script> 
<script src="{{ asset('layout/scripts/jquery.fitvids.min.js') }}"></script> 
<script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script> 
<script src="{{ asset('layout/scripts/tabslet/jquery.tabslet.min.js') }}"></script>
@show

</body>
</html>
