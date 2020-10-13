<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <title>@yield('title', 'Control servicio social')</title>

    <!-- Style sheets -->
    @include('template.app_css')
    @stack('css')
</head>
<body>
@include('template.header')
<div id="main-container" class="container-fluid">
    <div class="card">
       <div class="card-body">
           @yield('content')
       </div>
    </div>
</div>
@include('template.footer')
<!-- Javascript -->
@include('template.app_js')
@stack('scripts')
</body>
</html>
