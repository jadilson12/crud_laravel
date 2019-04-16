<html>
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <!-- custom-->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

</head>
<body>
<div class="container">
    @component('components.navbar',[ "current" => $current])
    @endcomponent
    <main role="main">
        @hasSection('body')
            @yield('body')
        @endif
    </main>
</div>

<!-- Bootstrap -->
<script src="{{ asset('js/app.js')}}" type="text/javascript" ></script>

@hasSection('javascript')

    @yield('clientes')
    @yield('javascript')
@endif

</body>
</html>
