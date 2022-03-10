<html>

    <head>
        <title>App Name - We Fashion</title>
    </head>

    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            <nav>
                <a href="{{ route('sold') }}">Sold</a>
                <a href="{{ route('homme') }}">Homme</a>
                <a href="{{ route('femme') }}">Femme</a>
            </nav>
            @yield('content')
        </div>
    </body>

</html>