<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tu Voz Cajamarca') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7CPoppins:300,400,500,600,700"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/f.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/t.min.css')}}">
    @yield('inlineStyles')
    <script src="{{asset('js/t.min.js')}}"></script>
</head>
<body>
<div class="index-14">
    @include('components.header')
    @yield('content')
    <input type="hidden" name="baseUrl" id="baseUrl" value="{{ asset('')}}">
    <!-- Page Content -->
    <main>
    </main>
    @include('components.footer')
</div>
@yield('inlineScripts')
</body>
</html>
