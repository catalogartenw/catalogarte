<html>
    <body>
        <div class="sidebar">
        @section('sidebar')
            This is the master sidebar.
        @show
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>