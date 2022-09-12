<html>
   <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('app.css'); }}">
   </head>
   <body>
        @include('layouts.navbar')
        @yield('content')
        <div align = "center">
            <br><br><br>
            <h6>Copyright @ Everyone Can Code 2022</h6>
            <br><br><br>
        </div>
   </body>
</html>