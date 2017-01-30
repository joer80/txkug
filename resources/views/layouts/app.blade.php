<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'TXKUG') }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link href="/css/all.css" rel="stylesheet">
        <link href="/css/welcome.css" rel="stylesheet">
        @yield('head_includes')
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                ]) !!};
        </script>
    </head>
    <body>
        <header>
            @include('layouts.nav')
            @include('layouts.intro')
        </header>
        <main>
            <div class="container">
                <div id="app">
                    @yield('content')
                </div>
            </div>
        </main>
        @include('layouts.footer')
        <script type="text/javascript" src="/js/app.js"></script>
        <script type="text/javascript" src="/js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="/js/tether.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
        <script type="text/javascript" src="/js/mdb.js"></script>
        @yield('foot_includes')
        <script>
            new WOW().init();
        </script>
    </body>
</html>