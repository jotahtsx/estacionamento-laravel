<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Dashboard')</title>
    <link href="{{ asset('css/simple-datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/font-awesome-all.js') }}" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    @include('layouts.partials.header')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.partials.sidebar')
        </div>

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

            @include('layouts.partials.footer')
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/simple-datatables.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('scripts')
</body>

</html>
