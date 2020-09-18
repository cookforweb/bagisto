<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('page_title')</title>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css?v='. last_modification_timestamp(public_path('css/app.css'))) }}" />

</head>
<body>

<header id="header" class="border-bottom">
    <div class="row">
        <div class="col-12">
            test logo
        </div>
        <div class="col-12">
            search
        </div>
    </div>
</header>

<main id="main">
    @yield('content')
</main>

<script type="text/javascript" src="{{ asset('js/app.js?v='. last_modification_timestamp(public_path('js/app.js'))) }}"></script>

</body>
</html>