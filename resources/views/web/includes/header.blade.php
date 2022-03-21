<!-- Main Header -->
<header class="main-header header-style-two">
    <!-- Header Top -->
    <div class="header-top header-top-two">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <!--Info-->
                    <div class="info">
                        <ul class="clearfix">
                            <li class="phone">WhatsApp &nbsp; <a href="tel:133500-8787"><span class="icon fab fa-whatsapp"></span> (13) 3500-8787</a></li>
                            <li class="email"><a href="mailto:contato@gemeosveiculos.com.br"><span class="icon fa fa-envelope"></span> contato@gemeosveiculos.com.br</a></li>
                        </ul>
                    </div>
                </div>

                <div class="top-right clearfix">
                    <div class="my-account">
                        <ul class="clearfix">
                            <li><a href="https://www.instagram.com/gemeosveiculos/" target="_blank"><span class="icon fab fa-instagram"></span> gemeosveiculos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{route('web.home')}}" title="{{ env('APP_NAME') }}"><img src="{{url(asset('web/assets/images/logo-two.png'))}}" alt="{{ env('APP_NAME') }}" title="{{ env('APP_NAME') }}"></a></div>
                </div>
                <div class="nav-content clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{route('web.home')}}">Início</a></li>
                                    <li><a href="{{route('web.about')}}">Gêmeos Veículos</a></li>
                                    <li><a href="{{route('web.stock')}}">Nosso Estoque</a></li>
                                    <li><a href="{{route('web.units')}}">Unidade</a></li>
                                    <li><a href="{{route('web.contact')}}">Fale Conosco</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{route('web.home')}}" title=""><img src="{{url(asset('web/assets/images/sticky-logo.png'))}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right clearfix">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
                <!--Search Btn-->

                <!--Book Btn-->
                <div class="booking-link">
                    <a href="https://api.whatsapp.com/send?phone=5513991387447" target="_blank" class="theme-btn btn-style-one"><div class="btn-title">WhatsApp</div></a>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo-two.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
