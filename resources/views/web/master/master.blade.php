<!doctype html>
<html class="no-js" lang="pt-br">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NSK2XR5');</script>
    <!-- End Google Tag Manager -->

    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link href="{{ url(asset('web/assets/css/plugins.css')) }}" type="text/css" rel="stylesheet">
    <link href="{{ url(asset('web/assets/css/style.css')) }}" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

        .pagination{
            list-style-type: none;
        }
        .pagination li {
            display:inline;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

</head>

<body data-barba="wrapper" data-smooth-scroll="true" data-cursor="true" data-header-sticky="false" data-menu-style="classic" data-page-layout="light" data-header-layout="dark" data-menu-layout="light" data-footer-layout="light" data-page-loader="true">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSK2XR5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DJNQ0SV521"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DJNQ0SV521');
</script>

<div data-duration="3" class="alioth-page-loader" data-layout="light">

    <span class="apl-background"></span>
    <div class="apl-count"></div>

</div>


<div class="alioth-page-transitions" data-layout="light">

    <span class="apt-bg"></span>

    <div class="trans-text">Carregando, aguarde..</div>

</div>

<div data-dark-circle="rgba(25,27,29,.6)" data-dark-dot="#191b1d" data-light-circle="hsla(0,0%,100%,.2)" data-light-dot="#fff" id="mouseCursor">
    <div id="cursor"></div>
    <div id="dot"></div>
</div>


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
