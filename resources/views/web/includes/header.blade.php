<div class="site-header">

    <div class="header-wrapper">

        <div class="site-branding">
            <div class="site-logo">
                <a href="{{route('web.home')}}">
                    <img alt="Site Logo" class="dark-logo" src="{{asset((url('web/assets/img/site-logo.png')))}}">
                    <img alt="Site Logo Light" class="light-logo" src="{{asset((url('web/assets/img/site-logo-light.png')))}}">
                </a>
            </div>
        </div>

        <div class="menu-toggle">
            <span class="toggle-line"></span>
            <span class="toggle-line"></span>
        </div>

        <div class="site-navigation">

            <span class="sub-back"><i class="icofont-long-arrow-left"></i></span>

            <ul class="menu main-menu">
                <li class="menu-item"><a href="{{route('web.home')}}">Home</a></li>
                <li class="menu-item"><a href="{{route('web.about')}}">Sobre</a></li>
                <li class="menu-item"><a href="{{route('web.stock')}}">Veículos</a></li>
                <li class="menu-item"><a href="unidades.html">Unidades</a></li>
            </ul>

            <div class="menu-widget menu-widget-left">
                <ul class="social-list">
                    <li><a href="https://www.instagram.com/1onemotors/" target="_blank">Instagram</a></li>
                </ul>

            </div>

            <div class="menu-widget menu-widget-right">
                <div class="git-button">
                    <a href="{{route('web.contact')}}">Fale Conosco</a>
                </div>
            </div>
        </div>

        <div class="header-widgets">
            <div class="header-widget">
                <div class="header-cta-but">
                    <a data-hover="Fale Conosco" href="{{route('web.contact')}}">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
