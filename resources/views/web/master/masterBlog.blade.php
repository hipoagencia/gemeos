<!doctype html>
<html class="no-js" lang="pt-br">
<head>

    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/font-icons.min.css')) }}">

    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/theme-vendors.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/style.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/responsive.css')) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

</head>
<body data-mobile-nav-style="classic" >
<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg {{ (request()->route()->getName() == 'web.blog' || request()->route()->getName() == 'web.home' ? 'navbar-light' : 'navbar-dark') }} bg-transparent header-light fixed-top header-reverse-scroll">
        <div class="container-lg nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="{{ route('web.blog') }}">
                    <img src="{{ url(asset(env('INFO_LOGO'))) }}" data-at2x="{{ url(asset(env('INFO_LOGO'))) }}" class="default-logo" alt="">
                    <img src="{{ url(asset(env('INFO_LOGO'))) }}" data-at2x="{{ url(asset(env('INFO_LOGO'))) }}" class="alt-logo" alt="">
                    <img src="{{ url(asset(env('INFO_LOGO'))) }}" data-at2x="{{ url(asset(env('INFO_LOGO'))) }}" class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">

                        @foreach($categories as $category)
                            <li class="nav-item"><a href="{{ route('web.category', ['category' => $category->slug]) }}" class="nav-link">{{ $category->name }}</a></li>
                        @endforeach

{{--                        <li class="nav-item dropdown simple-dropdown">--}}
{{--                            <a href="#" class="nav-link">Pages</a>--}}
{{--                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>--}}
{{--                            <ul class="dropdown-menu" role="menu">--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">About<i class="fas fa-angle-right dropdown-toggle"></i></a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li><a href="about-me.html">About me</a></li>--}}
{{--                                        <li><a href="about-us.html">About us</a></li>--}}
{{--                                        <li><a href="our-story.html">Our story</a></li>--}}
{{--                                        <li><a href="who-we-are.html">Who we are</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end pe-0 font-size-0">
                <div class="header-search-icon search-form-wrapper">
                    <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                    <!-- start search input -->
                    <div class="form-wrapper">
                        <button title="Close" type="button" class="search-close alt-font">×</button>
                        <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                            <div class="search-form-box">
                                <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                <button type="submit" class="search-button">
                                    <i class="feather icon-feather-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- end search input -->
                </div>
                <div class="header-language dropdown d-lg-inline-block">
                    <a href="https://api.whatsapp.com/send/?phone=5513996903040&text=Gostaria+de+receber+mais+informa%C3%A7%C3%B5es+sobre+https%3A%2F%2Fwww.rivierafull.com.br%2F&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>



@yield('content')


<div class="container text-center pb-5 pt-5">
    <img src="{{ url(asset('web/assets/images/ass.png')) }}"/>
</div>

<footer class="bg-full-brown padding-8-half-rem-tb md-padding-6-half-rem-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <img src="{{ url(asset(env('INFO_LOGO_WHITE'))) }}" data-at2x="{{ url(asset(env('INFO_LOGO_WHITE'))) }}" class="alt-logo mb-5" alt="">
                <div class=" margin-1-half-rem-bottom">
                    <ul class="large-icon">
                        <li><a class="facebook text-white" href="https://www.facebook.com/fullimoveis" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                        <li><a class="instagram text-white" href="https://www.instagram.com/rivierafull" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                    </ul>
                </div>

                <h4 class="alt-font text-white font-weight-300 margin-10px-bottom d-block letter-spacing-minus-2px">O seu imóvel com a sofisticação e qualidade que você merece</h4>
                <h5 class="alt-font font-weight-600 margin-7-rem-bottom mt-4"><a href="https://api.whatsapp.com/send?phone=5513996903040" class="text-white"><i class="fab fa-whatsapp"></i> (13) 99690-3040</a></h5>
                <p class="alt-font text-small text-white text-uppercase m-0">© Riviera Full 2022 - Desenvolvimento  <a href="https://www.hipoagencia.com.br/" target="_blank" class="text-decoration-line-bottom text-white">Hipo Agência</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
<!-- end scroll to top -->
<!-- javascript -->
<script type="text/javascript" src="{{ url(asset('web/assets/js/jquery.min.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/theme-vendors.min.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/main.js')) }}"></script>


@hasSection('js')
    @yield('js')
@endif

</body>
</html>
