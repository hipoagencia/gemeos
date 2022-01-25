<!doctype html>
<html class="no-js" lang="pt-br">
<head>

    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link href="{{ url(asset('web/assets/css/plugins.css')) }}" type="text/css" rel="stylesheet">
    <link href="{{ url(asset('web/assets/css/style.css')) }}" type="text/css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

</head>

<body data-barba="wrapper" data-smooth-scroll="true" data-cursor="true" data-header-sticky="true" data-menu-style="classic" data-page-layout="light" data-header-layout="dark" data-menu-layout="light" data-footer-layout="light" data-page-loader="true">


<div data-duration="5" class="alioth-page-loader" data-layout="light">

    <span class="apl-background"></span>

    <!--Loader Percentage (Don't Touch)-->
    <div class="apl-count"></div>
    <!--Loader Percentage (Don't Touch)-->

</div>
<!--/Page Loader-->
<!--Page Transitions-->
<div class="alioth-page-transitions" data-layout="light">

    <!--Transition Background (Don't touch)-->
    <span class="apt-bg"></span>
    <!--/Transition Background (Don't touch)-->
    <!--Transition Text-->
    <div class="trans-text">Carregando, aguarde..</div>
    <!--Transition Text-->

</div>
<!--/Page Transitions-->
<!-- Mouse Cursor -->
<div data-dark-circle="rgba(25,27,29,.6)" data-dark-dot="#191b1d" data-light-circle="hsla(0,0%,100%,.2)" data-light-dot="#fff" id="mouseCursor">
    <div id="cursor"></div>
    <div id="dot"></div>
</div>
<!-- /Mouse Cursor -->

@include('web.includes.header')

@yield('content')

@include('web.includes.footer')

<script type="text/javascript" src="{{ url(asset('web/assets/js/jquery.min.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/plugins.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/barba.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/locomotive-scroll.min.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/gsap.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/scripts.js')) }}"></script>


@hasSection('js')
    @yield('js')
@endif

</body>
</html>
