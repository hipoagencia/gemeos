@extends('web.master.master')

@section('content')


    <section class="banner-section banner-two">
        <div class="banner-carousel owl-theme owl-carousel">

            <div class="slide-item">
                <div class="image-layer" style="background-image: url({{url(asset('web/assets/images/main-slider/4.jpg'))}});"></div>
                <div class="auto-container">
                    <div class="content-box">

                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle">Pellentesque eros urna, facilisis</div>
                                <h1>Lorem Ipsum<br />Dolor </h1>
                                <div class="text">Nulla mi arcu, rutrum eget scelerisque volutpat, luctus quis tortor.</div>
                                <div class="links-box clearfix">
                                    <a href="#" class="theme-btn btn-style-two"><div class="btn-title">Mais Informações</div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="yacht-rental-section">
        <div class="auto-container">
            <div class="title-row clearfix">
                <div class="sec-title-two light with-border">
                    <div class="upper-text">Curabitur nisi quam, congue id nulla eu</div>
                    <h2>Confira nosso <strong>estoque</strong></h2>
                    <div class="separator"></div>
                </div>
                <div class="filter-box">
                    <div class="selectable-list">
                        <div class="dropdown-outer open">
                            <a class="btn-box dropdown-toggle" id="filter_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="alt-text">Ver Estoque</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rentals-row">
                <div class="filter-list row clearfix">

                    @foreach($cars as $car)
                       @include('web.components.car')
                    @endforeach

                </div>
            </div>

            <div class="bottom-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Ver Estoque</a></div>
        </div>
    </section>



    <!--Featured Service Section-->
    <section class="featured-services">
        <div class="image-layer" style="background-image: url({{url(asset('web/assets/images/background/image-4.jpg'))}});"></div>
        <div class="auto-container">
            <div class="sec-title-two centered with-border">
                <div class="upper-text">Lorem ipsum dolor sit amet</div>
                <h2>Compre com a <strong>Gêmeos Veículos</strong></h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
                <!--Featured Service-->
                <div class="featured-service-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="icon-box">
                            <img src="{{url(asset('web/assets/images/car.png'))}}" />
                        </div>
                        <div class="content-box">
                            <div class="title-box">
                                <h4>Motivo</h4>
                                <div class="subtitle">Nam ac erat felis.</div>
                            </div>
                            <div class="text">Phasellus sit amet lectus venenatis, semper mauris non, sagittis est. Nam blandit gravida felis, a egestas dolor porta non.</div>
                        </div>
                    </div>
                </div>
                <!--Featured Service-->
                <div class="featured-service-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <div class="icon-box">
                            <img src="{{url(asset('web/assets/images/car.png'))}}" />
                        </div>
                        <div class="content-box">
                            <div class="title-box">
                                <h4>Motivo</h4>
                                <div class="subtitle">Nam ac erat felis.</div>
                            </div>
                            <div class="text">Phasellus sit amet lectus venenatis, semper mauris non, sagittis est. Nam blandit gravida felis, a egestas dolor porta non.</div>
                        </div>
                    </div>
                </div>
                <!--Featured Service-->
                <div class="featured-service-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="2000ms">
                        <div class="icon-box">
                            <img src="{{url(asset('web/assets/images/car.png'))}}"/>
                        </div>
                        <div class="content-box">
                            <div class="title-box">
                                <h4>Motivo</h4>
                                <div class="subtitle">Nam ac erat felis.</div>
                            </div>
                            <div class="text">Phasellus sit amet lectus venenatis, semper mauris non, sagittis est. Nam blandit gravida felis, a egestas dolor porta non.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
