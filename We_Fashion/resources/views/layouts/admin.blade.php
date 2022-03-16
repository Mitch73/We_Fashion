<html>

    <head>
        <title>App Name - We Fashion</title>
        <link rel="stylesheet" href="../css/app.css">
    </head>

    <body>
        @section('sidebar')
            {{-- This is the master sidebar. --}}
        @show
 
        <div class="container">
            <nav>
                {{-- @include('') --}}
            </nav>          

            @yield('content')
                @include('footer.index')  
        </div>
    </body>

</html>