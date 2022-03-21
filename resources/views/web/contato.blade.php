@extends('web.master.master')

@section('content')

    <section class="page-banner">
        <div class="image-layer"
             style="background-image:url({{url(asset('web/assets/images/background/banner-1.jpg'))}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix" style="padding-top:200px;">
                    <h1>Fale Conosco</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="auto-container">

            <div class="info-container">
                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-address"></span>
                            </div>
                            <div class="title-box">
                                <h4>Endereço</h4>
                                <div class="subtitle">Venha tomar um café</div>
                            </div>
                            <div class="content-box">
                                <div class="text">Av. Antônio Emmerich, 918<br>Vila Cascatinha<br>São Vicente/SP</div>
                            </div>
                            <div class="link-box">
                                <a href="https://goo.gl/maps/UKZVSPuzSVJfoWKK9" class="theme-btn" target="_blank"><div class="btn-title">Ver no Google</div></a>
                            </div>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-smartphone-3"></span>
                            </div>
                            <div class="title-box">
                                <h4>Telefone</h4>
                                <div class="subtitle">Ligue agora mesmo</div>
                            </div>
                            <div class="content-box">
                                <div class="text">(13) 3500-8787<br>(13) 99138-7447<br><br></div>
                            </div>
                            <div class="link-box">
                                <a href="https://api.whatsapp.com/send?phone=5513991387447" class="theme-btn"><div class="btn-title">WhatsApp</div></a>
                            </div>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInLeft;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-email-1"></span>
                            </div>
                            <div class="title-box">
                                <h4>E-mail</h4>
                                <div class="subtitle">Mande uma mensagem</div>
                            </div>
                            <div class="content-box">
                                <div class="text" style="font-size:13px;">contato@gemeosveiculos.com.br<br><br><br></div>
                            </div>
                            <div class="link-box">
                                <a href="mailto:contato@gemeosveiculos.com.br" class="theme-btn"><div class="btn-title">Enviar</div></a>
                            </div>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="900ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 900ms; animation-name: fadeInLeft;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="title-box">
                                <h4>Horário</h4>
                                <div class="subtitle">Encontre seu carro novo</div>
                            </div>
                            <div class="content-box">
                                <div class="text">Seg - Sex: 9h00 a 18h00 <br>Sáb: 9h00 a 16h00<br>Dom: fechado</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection
