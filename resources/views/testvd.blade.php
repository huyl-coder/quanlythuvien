<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <header> 
        <p>đây là phần header</p>
    </header>
    <body>
        @yield('content')
    </body>
    <footer>
        <p>đây là phần footer</P>
    </footer>
</html>