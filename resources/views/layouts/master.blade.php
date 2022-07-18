<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@section('title')Optistretch @show</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/icon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/icon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/icon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/icon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/icon/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/icon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/icon/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/icon/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="/icon/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="/icon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/icon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/icon/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/icon/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="Optistretch"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="/mstile-310x310.png" />
        @section('css')
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        @show
        @section('headscripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @show
        @section('optistretchcss')
        <link rel="stylesheet" href="/assets/css/optistretch.css">
        @show
    <head>
    <body data-spy="scroll">
        @include('includes.navbar')
        @section('pageheading')
            <section id="page-heading">
                <a href="{{url('/home')}}" class="home-link" title="Opti-Stretch - Home"><img src="/assets/images/logo.png" class="page-logo"></a>
            </section>
        @show
        {{-- @include('includes.notifications') --}}
        @yield('content')
        <div id="footer-separator"></div>
        @section('pagefooter')
        @show
        @include('includes.footer')
        @section('footerscripts')
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="//use.typekit.net/did5tzd.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        @show
    </body>
</html>
