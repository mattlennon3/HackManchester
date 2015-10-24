<!DOCTYPE html>
<html>
    <head>
        <title>App Name</title>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        {!! HTML::script('js/bootstrap.js') !!}
        {!! HTML::style('css/bootstrap.css') !!}

        {!! HTML::style('css/main.css') !!}

        @yield('custom-css')

    </head>
    <body>
        @include('layout.navbar')
        @include('header.home-header')

        @yield('content')
        
        @include('layout.footer')

        {!! HTML::script('js/main.js') !!}
    </body>
</html>
