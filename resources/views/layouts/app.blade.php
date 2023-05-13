<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Ion Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <title>@yield('titlePage') Page|Blog</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @yield('content')

        @include('layouts.footer')
    </div>

    {{-- Toast Success Messages --}}
    @if(Session::has('flash_success'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast fade @if(Session::has('flash_success')) {{ 'show' }} @endif" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <div class="rounded me-2 bg-success" style="width: 20px; height: 20px"></div>
            <strong class="me-auto">Blog</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-success">
                {{ Session::get('flash_success') }}
            </div>
        </div>
    </div>
    @endif
    {{-- Toast Error Messages --}}
    @if(Session::has('flash_error'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast fade @if(Session::has('flash_error')) {{ 'show' }} @endif" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <div class="rounded me-2 bg-danger" style="width: 20px; height: 20px"></div>
            <strong class="me-auto">Blog</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-danger">
                {{ Session::get('flash_error') }}
            </div>
        </div>
    </div>
    @endif
</body>
<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</html>
