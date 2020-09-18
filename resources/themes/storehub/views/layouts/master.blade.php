<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('page_title')</title>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css?v='. last_modification_timestamp(public_path('css/app.css'))) }}" />
    <link rel="stylesheet" href="{{ asset('css/regular/main.css?v='. last_modification_timestamp(public_path('css/regular/main.css'))) }}" />

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