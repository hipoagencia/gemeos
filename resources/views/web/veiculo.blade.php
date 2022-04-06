@extends('web.master.master')

@section('content')

    <section class="page-banner">
        <div class="image-layer"
             style="background-image:url({{url(asset('web/assets/images/background/banner-1.jpg'))}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix" style="padding-top:200px;">
                    <h1>{{ $car->marca }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="yacht-tours-container alternate-bg-two">
        <div class="auto-container">

            <div class="content-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="content-inner">
                            <!--Tour Details-->
                            <div class="tour-details">

                                <div class="info-title clearfix">
                                    <div class="left-info">
                                        <h3>{{ $car->marca }} {{ $car->modelo }} {{ $car->versao }}</h3>
                                        <div class="info">
                                            @foreach($complements as $complement)
                                                <div class="icon flaticon-down-arrow"></div> {{$complement}}
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="main-image" style="width: 85%;">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">

                                            @foreach($car->img as $img)
                                                <li data-target="#carouselExampleIndicators"
                                                    class="{{ ($loop->first ? 'active' : '')  }}"
                                                    data-slide-to="{{$img->iteration}}"></li>
                                            @endforeach

                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach($car->img as $img)
                                                <div class="carousel-item {{ ($loop->first ? 'active' : '')  }}">
                                                    <img src="{{$img->url}}" class="d-block w-100" alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-target="#carouselExampleIndicators" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-target="#carouselExampleIndicators" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </button>
                                    </div>
                                </div>


                                {{--AQUI VAI A VERSÃO MOBILE--}}

                                <div class="widgets-content hidden-mob">
                                    <!--Widget-->
                                    <div class="tour-widget single-booking-widget">
                                        <div class="widget-inner">
                                            <div class="upper-info clearfix">
                                                <div class="price-info">
                                                    <div class="icon"><span class="flaticon-gas"></span></div>
                                                    <div class="p-title">Preço</div>
                                                    <div class="p-amount">{{ $car->preco }}</span></div>
                                                </div>
                                            </div>

                                            <div class="specs">
                                                <table class="specs-table">
                                                    <tbody>
                                                    <tr>
                                                        <td>Combustível</td>
                                                        <td>{{$car->combustivel}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cor</td>
                                                        <td>{{$car->cor}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ano</td>
                                                        <td>{{$car->anofabricacao}} / {{$car->anomodelo}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Câmbio</td>
                                                        <td>{{$car->cambio}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KM</td>
                                                        <td>{{$car->km}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>


                                </div>


                                <div class="facilities">
                                    <h4>Opcionais</h4>
                                    <div class="facility-box">
                                        <ul class="clearfix">
                                            @foreach($opcinals as $opcinal)
                                                <li>{{$opcinal}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="widgets-side col-lg-4 col-md-6 col-sm-12 hidden-desk">
                        <div class="widgets-content">
                            <!--Widget-->
                            <div class="tour-widget single-booking-widget">
                                <div class="widget-inner">
                                    <div class="upper-info clearfix">
                                        <div class="price-info">
                                            <div class="icon"><span class="flaticon-gas"></span></div>
                                            <div class="p-title">Preço</div>
                                            <div class="p-amount">{{ $car->preco }}</span></div>
                                        </div>
                                    </div>

                                    <div class="specs">
                                        <table class="specs-table">
                                            <tbody>
                                            <tr>
                                                <td>Combustível</td>
                                                <td>{{$car->combustivel}}</td>
                                            </tr>
                                            <tr>
                                                <td>Cor</td>
                                                <td>{{$car->cor}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ano</td>
                                                <td>{{$car->anofabricacao}} / {{$car->anomodelo}}</td>
                                            </tr>
                                            <tr>
                                                <td>Câmbio</td>
                                                <td>{{$car->cambio}}</td>
                                            </tr>
                                            <tr>
                                                <td>KM</td>
                                                <td>{{$car->km}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="default-form main-booking-form">

                                        {{--                                        <h4>Opcionais</h4>--}}
                                        {{--                                        <div class="facility-box">--}}
                                        {{--                                            <ul class="clearfix">--}}
                                        {{--                                                @foreach($opcinals as $opcinal)--}}
                                        {{--                                                    <li>{{$opcinal}}</li>--}}
                                        {{--                                                @endforeach--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
            opacity: 1;
        }

        .carousel-control-next, .carousel-control-prev {
            opacity: 1;
            transition: none;
            color: transparent !important;
            background-color: transparent;
        }

        .carousel-control-prev-icon {
            filter: invert(0%) sepia(0%) saturate(7500%) hue-rotate(302deg) brightness(98%) contrast(103%);
        }
    </style>

@endsection
