<div class="site-header">

    <div class="header-wrapper">

        <!-- Site Branding -->
        <div class="site-branding">

            <!-- Site Logos -->
            <div class="site-logo">
                <a href="{{route('web.home')}}">
                    <img alt="Site Logo" class="dark-logo" src="{{asset((url('web/assets/img/site-logo.png')))}}">
                    <img alt="Site Logo Light" class="light-logo" src="{{asset((url('web/assets/img/site-logo-light.png')))}}">
                </a>
            </div>
            <!-- /Site Logos -->

        </div>
        <!-- /Site Branding -->
        <!-- Menu Toggle Button (Don't touch) -->
        <div class="menu-toggle">
            <span class="toggle-line"></span>
            <span class="toggle-line"></span>
        </div>
        <!-- /Menu Toggle Button (Don't touch) -->
        <!-- Site Navigation -->
        <div class="site-navigation">

            <span class="sub-back"><i class="icofont-long-arrow-left"></i></span>

            <!-- Main Menu -->
            <ul class="menu main-menu">

                <li class="menu-item"><a href="{{route('web.home')}}">Home</a></li>
                <li class="menu-item"><a href="sobre.html">Sobre</a></li>
                <li class="menu-item"><a href="{{route('web.stock')}}">Veículos</a></li>
                <li class="menu-item"><a href="unidades.html">Unidades</a></li>

            </ul>
            <!-- /Main Menu -->
            <!-- Menu Widget (Left) -->
            <div class="menu-widget menu-widget-left">
                <ul class="social-list">
                    <li><a href="https://www.instagram.com/1onemotors/" target="_blank">Instagram</a></li>
                </ul>

            </div>
            <!-- /Menu Widget (Left) -->
            <!-- Menu Widget (Right) -->
            <div class="menu-widget menu-widget-right">
                <div class="git-button">
                    <a href="{{route('web.contact')}}">Fale Conosco</a>
                </div>
            </div>
            <!-- /Menu Widget (Right) -->

        </div>
        <!-- /Site Navigation -->
        <!-- Header Widgets -->
        <div class="header-widgets">

            <!-- Header Widget-->
            <div class="header-widget">

                <!--CTA Widget-->
                <div class="header-cta-but">
                    <a data-hover="Fale Conosco" href="#">
                        Fale Conosco
                    </a>
                </div>
                <!--CTA Widget-->

            </div>
            <!-- Header Widget-->
        </div>
        <!-- /Header Widgets -->

    </div>

</div>
