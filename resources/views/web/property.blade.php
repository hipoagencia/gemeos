@extends('web.master.masterBlog')

@section('content')

    <section class="parallax p-0 home-digital-agency" data-parallax-background-ratio="0.5"
             style="background-image: url({{$property->cover[0]->url}}); background-position: 50% 0px;">
        <div class="overlay-bg bg-full-green" style="opacity: 0.96;"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative full-screen md-h-600px sm-h-350px d-flex flex-column">
                    <h1 class="alt-font font-weight-600 text-white title-large w-50 mt-auto mb-0 letter-spacing-minus-5px sm-letter-spacing-minus-1-half xs-w-70">{{ $property->Bairro }}</h1>
                    <div class="d-flex flex-row align-items-center mt-auto margin-7-half-rem-bottom">
                        <span
                            class="bg-full-brown w-50 h-1px margin-9-rem-right sm-w-40 sm-margin-5-rem-right xs-w-15 xs-margin-2-rem-right"></span>
                        <span class="alt-font text-large color-full-brown">{{ $property->SubTipoImovel }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="position-relative">
        <img src="{{ url(asset('web/assets/images/full-detail.png')) }}"
             class="position-absolute bottom-0 left-0px left d-none d-xl-block img-detail"
             alt="{{ $property->Bairro }}"/>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div
                            class="col-lg-6 padding-five-right lg-padding-15px-right md-margin-50px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <h4 class="alt-font text-extra-dark-gray font-weight-500  letter-spacing-minus-1px">
                                {{ $property->TipoImovel }} com {{ $property->QtdDormitorios }} quartos por
                                R${{ $property->PrecoVenda }}</h4>

                            <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-2 mt-5">
                                <div class="col mb-3 text-center mb-5">
                                    <i class="ti-move icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Área Útil</b><br>
                                    {{ $property->AreaUtil }} m2
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="ti-fullscreen icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Área Total</b><br>
                                    {{ $property->AreaTotal }} m2
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="fas fa-bed icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Quartos</b><br>
                                    {{ $property->QtdDormitorios }}
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="fas fa-bed icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Suítes</b><br>
                                    {{ $property->QtdSuites }}
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="ti-car icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Vagas</b><br>
                                    {{ $property->QtdVagas }}
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="fas fa-water icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Piscina</b><br>
                                    {{ ($property->Piscina == '1' ? 'Sim' : 'Não') }}
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="fas fa-chair icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Mobiliado</b><br>
                                    {{ ($property->Mobiliado == '1' ? 'Sim' : 'Não') }}
                                </div>
                                <div class="col mb-3 text-center mb-3">
                                    <i class="solid-icon-Fire-Flame2 icon-medium color-full-brown"></i><br>
                                    <b style="font-size:13px !important;">Churrasqueira</b><br>
                                    {{ ($property->Mobiliado == '1' ? 'Sim' : 'Não') }}
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-5 offset-lg-1 wow animate__fadeIn" data-wow-delay="0.4s"
                             style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                            <span
                                class="alt-font text-medium text-uppercase font-weight-500 margin-20px-bottom d-inline-block text-extra-dark-gray">{{ $property->Estado }} {{ $property->Bairro }}</span>
                            <p>{!! nl2br(e(strstr($property->Observacao, 'RIVIERA DE SÃO LOURENÇO APAIXONANTE POR NATUREZA!', true))) !!}</p>

                            <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61c22260ce5c7010"></script>
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .gallery-img {
            max-height: 700px;
        }

        @media only screen and (max-width: 900px) {
            .gallery-img {
                max-height: 300px;
            }
        }

        @media only screen and (max-width: 1500px) {
            .img-detail {
                width:130px;
            }
        }
    </style>


    <section class="py-0 position-relative">
        <div
            class="slider-blog-banner swiper-container black-move swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
            data-slider-options="{ &quot;loop&quot;: true, &quot;centeredSlides&quot;: true, &quot;slidesPerView&quot;: &quot;1&quot;, &quot;speed&quot;: 1000, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-pagination&quot;, &quot;clickable&quot;: true }, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot; }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: &quot;auto&quot; } }, &quot;effect&quot;: &quot;slide&quot; }">
            <div class="swiper-wrapper" id="swiper-wrapper-477add333d3d10bd3" aria-live="off">

                @foreach($property->img as $image)

                    <div class="swiper-slide w-55 swiper-slide-prev gallery-img" role="group" aria-label="1 / 3"
                         data-swiper-slide-index="0"><img src="{{ $image->url }}" class="w-100" alt=""
                                                          data-no-retina=""></div>

                @endforeach

                {{--                <div class="swiper-slide w-55 swiper-slide-active" role="group" aria-label="2 / 3" data-swiper-slide-index="1" ><img src="{{ url(asset('web/assets/images/single-project-page-05-img-02.jpg')) }}" class="w-100" alt="" data-no-retina=""></div>--}}

                {{--                <div class="swiper-slide w-55 swiper-slide-next" role="group" aria-label="3 / 3" data-swiper-slide-index="2" ><img src="{{ url(asset('web/assets/images/single-project-page-05-img-03.jpg')) }}" class="w-100" alt="" data-no-retina=""></div>--}}


                <div
                    class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07 box-shadow-large bg-white"
                    tabindex="0" role="button" aria-label="Previous slide"
                    aria-controls="swiper-wrapper-477add333d3d10bd3"><i
                        class="feather icon-feather-arrow-left text-extra-dark-gray"></i></div>
                <div
                    class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07 box-shadow-large bg-white"
                    tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-477add333d3d10bd3">
                    <i class="feather icon-feather-arrow-right text-extra-dark-gray"></i></div>
                <!-- end slider navigation -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 alt-font text-uppercase text-small font-weight-500 line-height-12px">
                    <div class="row">
                        <div
                            class="col-12 col-md-6 col-sm-6 text-center border-right border-color-medium-gray sm-margin-20px-bottom xs-border-none wow animate__fadeIn"
                            style="visibility: visible; animation-name: fadeIn;">
                            <span
                                class="d-block text-extra-dark-gray d-lg-inline-block md-margin-10px-bottom">IPTU: </span>
                            <span> {{ ( $property->PrecoIptu == '' ? 'Consulte' : 'R$ ' . $property->PrecoIptu ) }}</span>
                        </div>
                        <div
                            class="col-12 col-md-6 col-sm-6 text-center border-right border-color-medium-gray sm-border-none sm-margin-20px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <span
                                class="d-block text-extra-dark-gray d-lg-inline-block md-margin-10px-bottom">Condomínio: </span>
                            <span> {{ ( $property->PrecoCondominio == '' ? 'Consulte' : 'R$ ' . $property->PrecoCondominio ) }}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--    <section class="p-0 parallax h-500px md-h-350px sm-h-350px" data-parallax-background-ratio="0.1"--}}
    {{--             style="background-image: url('{{ url(asset('web/assets/images/detal.jpg')) }}'); background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial;"></section>--}}



    {{--    <section class="overflow-visible overlap-height padding-70px-bottom wow animate__fadeIn">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12 text-center overlap-section wow animate__zoomIn"--}}
    {{--                     style="visibility: visible; animation-name: zoomIn; margin-top: -271px;">--}}
    {{--                    <div class="overlap-section-inner">--}}
    {{--                        <img src="{{ $property->img[2]->url }}" alt="" data-no-retina="">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row justify-content-center overlap-gap-section">--}}
    {{--                <div--}}
    {{--                    class="col-12 col-xl-8 col-lg-10 text-center margin-3-rem-top md-no-margin-top md-margin-3-rem-bottom sm-no-margin-bottom">--}}
    {{--                    <p>{!! nl2br(e(strstr($property->Observacao, 'RIVIERA DE SÃO LOURENÇO APAIXONANTE POR NATUREZA!'))) !!}</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}


    <section id="call"
             class="cover-background wow animate__fadeIn md-background-position-right xs-no-padding-tb xs-border-tb border-color-medium-gray"
             style="background-image: url('{{ url(asset('web/assets/images/detal.jpg')) }}'); visibility: visible; animation-name: fadeIn;">
        <div class="container xs-no-padding-lr">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-lg-8 col-md-10 wow animate__fadeIn" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div
                        class="text-center bg-white box-shadow-large border-radius-6px padding-5-rem-tb padding-7-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                        <span
                            class="alt-font text-medium color-full-brown text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">Nós vamos te ajudar a encontrar o seu imóvel</span>
                        <h5 class="alt-font text-dark-charcoal font-weight-700 text-uppercase letter-spacing-minus-1px margin-40px-bottom w-80 mx-auto xs-w-100">
                            Preencha os campos, em breve entraremos em contato</h5>
                        <!-- start contact form -->
                        <form class="margin-30px-bottom">
                            <input class="medium-input border-radius-5px margin-25px-bottom required" type="text"
                                   name="name" placeholder="Nome">
                            <input class="medium-input border-radius-5px margin-25px-bottom required" type="email"
                                   name="email" placeholder="E-mail">
                            <input class="medium-input border-radius-5px margin-25px-bottom required" type="email"
                                   name="email" placeholder="Celular / WhatsApp">

                            <button
                                class="btn btn-fancy btn-large bg-full-green text-white w-100 no-margin-bottom submit"
                                type="submit" name="submit">Quero um contato imediato
                            </button>
                            <div class="form-results border-radius-5px d-none"></div>
                        </form>
                        <p class="w-80 mx-auto text-extra-small line-height-22px m-0 xs-w-100">Fique tranquilo, não
                            compactuamos com SPAM.</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center align-items-center margin-twelve-top">
                <div class="col-12 col-xl-4 col-lg-4 col-md-5 col-sm-6 text-center text-sm-end xs-margin-20px-bottom">
                    <span
                        class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Vamos manter contato?</span>
                </div>
                <div class="col-12 col-md-2 d-none d-md-block">
                    <span class="w-100 h-1px d-block bg-medium-gray"></span>
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-start">
                    <ul class="small-icon">
                        <li><a class="facebook text-extra-dark-gray text-sm-start"
                               href="https://www.facebook.com/fullimoveis" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>

                        <li><a class="instagram text-extra-dark-gray text-sm-start"
                               href="https://www.instagram.com/rivierafull" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>

                        <li><a class="twitter text-extra-dark-gray text-sm-start" href="http://www.twitter.com"
                               target="_blank"><i class="fab fa-pinterest"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>

    </section>


    <div class="container-fluid position-fixed w-100 bottom-0 left-0 text-center z-index-9">
        <div class="row">
            <a href="#call" class="text-white col-6 bg-full-brown pt-3 pb-3"><i class="fa fa-user"></i> Falar com um <b>consultor</b></a>
            <a href="https://api.whatsapp.com/send?phone=5513996903040&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20a%20respeito%20do%20im%C3%B3vel%20de%20c%C3%B3digo%20*{{$property->CodigoImovel}}*"
               class="text-white col-6 bg-full-green pt-3 pb-3"><i class="fab fa-whatsapp"></i> Contato via
                <b>WhatsApp</b></a>
        </div>
    </div>




@endsection
