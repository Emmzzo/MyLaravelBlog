<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" type="text/css" href="{{ asset('frontend/css/theme-7.css') }}"/>
    <!-- FontAwesome JS-->
    <script src="{{ asset('frontend/fontawesome/js/all.min.js') }}"></script>
    @yield('styles')
</head>
<body>
    @include('frontend.partials.header')
    
    <div class="main-wrapper">
        @yield('content')
    @include('frontend.partials.footer')
    </div><!--//main-wrapper-->
     <!-- Javascript -->  
     <script src="{{ asset('frontend/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
