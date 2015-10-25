
<!DOCTYPE html>
<html>
    <head>
        <title>Challengr</title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        {!! HTML::script('js/bootstrap.js') !!}
        {!! HTML::script('js/flogin.js') !!}
        {!! HTML::style('css/bootstrap.css') !!}
        {!! HTML::style('css/font-awesome.css') !!}
        {!! HTML::style('css/bootstrap-social.css') !!}


        {!! HTML::style('css/main.css') !!}

        @yield('custom-css')

    </head>
    <body>
   
    
    
        @include('layout.navbar')
        <br/>
        @yield('content')
        
        @include('layout.footer')
{!! HTML::script('js/main.js') !!}
    </body>
</html>
