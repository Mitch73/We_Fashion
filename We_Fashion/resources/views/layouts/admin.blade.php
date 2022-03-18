<html>

    <head>
        <title>App Name - We Fashion</title>
        <link rel="stylesheet" href= {{ asset("css/app.css") }}>
    </head>

    <body>
        @section('sidebar')
            {{-- This is the master sidebar. --}}
        @show
 
        <div class="container">
            <nav>
                @include('menu.menu_admin')
            </nav>          

            @yield('content')
        </div>
    </body>

</html>