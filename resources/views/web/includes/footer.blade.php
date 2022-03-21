<!-- Main Footer -->
<footer class="main-footer footer-style-two">
    <div class="outer-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="widgets-inner">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="left-image"><img src="{{url(asset('web/assets/images/resource/footer-image.png'))}}"
                                                 alt="" title=""></div>
                    <div class="offer-carousel-box">
                        <div class="offer-carousel owl-theme owl-carousel">

                            @foreach($footerCars as $footerCar)
                                <div class="slide">
                                    <div class="offer-block">
                                        <div class="inner-box">
                                            <center><img src="{{url(asset('web/assets/images/logo-two.png'))}}" alt=""
                                                         title="" style="width:70%;"></center>

                                            <img src="{{$footerCar->cover->url}}"
                                                 alt="" title="" class="mt-3">

                                            <h4 class="mt-4">{{$footerCar->marca}} {{$footerCar->modelo}}</h4>
                                            <div class="subtitle">{{$footerCar->versao}}</div>

                                            <div class="links-box clearfix">
                                                <a href="{{route('web.stockOpen', ['slug' => $footerCar->slug])}}" class="theme-btn btn-style-one">
                                                    <div class="btn-title">R$ {{$footerCar->preco}}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="row clearfix">

                        <div class="column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h4>Informações</h4>
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>
                                                <span class="icon fa fa-map-marker-alt"></span> Av. Antônio Emmerich,
                                                918<br/>Vila Cascatinha, São Vicente
                                            </li>
                                            <li>
                                                <span class="icon fa fa-phone-alt"></span>
                                                Telefone <a href="tel:133500-8787">(13) 3500-8787</a>
                                            </li>
                                            <li>
                                                <span class="icon fa fa-envelope"></span>
                                                <a href="mailto:contato@gemeosveiculos.com.br">
                                                    contato@gemeosveiculos.com.br
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="https://www.facebook.com/gemeosautorepasse"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="https://www.instagram.com/gemeosveiculos/"><span class="fab fa-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h4>Links</h4>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <ul class="links">
                                                <li><a href="{{route('web.home')}}">Início</a></li>
                                                <li><a href="{{route('web.about')}}">Gêmeos Veículos</a></li>
                                                <li><a href="{{route('web.stock')}}">Nosso Estoque</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <ul class="links">
                                                <li><a href="{{route('web.units')}}">Unidade</a></li>
                                                <li><a href="{{route('web.contact')}}">Fale Conosco</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="copyright">Gêmeos Veículos &copy; 2022. Todos os direitos reservados.</div>
                    <div class="bottom-links">Desenvolvimento <a href="https://hipoagencia.com.br">Hipo Agência</a></div>
                </div>
            </div>
        </div>
    </div>

</footer>
