<!doctype html>
<html class="no-js" lang="pt-br">
<head>

    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link href="{{ url(asset('web/assets/css/bootstrap.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('web/assets/css/style.css')) }}" rel="stylesheet">

    <link href="{{ url(asset('web/assets/css/responsive.css')) }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}" type="image/x-icon">
    <link rel="icon" href="{{ url(asset(env('INFO_FAVICON'))) }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ url(asset('web/assets/js/respond.js')) }}"></script><![endif]-->

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

</head>

<body>





<div class="page-wrapper">

    <div class="preloader"><div class="icon"></div></div>

    @include('web.includes.header')

    @yield('content')

    @include('web.includes.footer')

</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-back"></span></div>



<script src="{{ url(asset('web/assets/js/jquery.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/popper.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/bootstrap.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/jquery-ui.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/jquery.fancybox.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/owl.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/mixitup.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/appear.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/wow.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/scrollbar.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/datetimepicker.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/validate.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/paroller.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/element-in-view.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/custom-script.js')) }}"></script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6273df451aa399e1"></script>

@hasSection('js')
    @yield('js')
@endif

</body>
</html>
