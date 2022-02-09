@extends('web.master.master')

@section('content')


    <div id="page" class="product-page" data-barba="container" style="visibility: visible;">

        <div data-animate="true" class="project-page-header style_3">

            <!-- Project Page Head -->
            <div class="project-head">
                <div class="project-title">
                    <h1 class="big-title" style="">
                        {{$car->marca}}
                    </h1>
                    <div class="project-cat">
                        {{$car->modelo}} {{$car->versao}}
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="wrapper-full no-gap">
                <div class="c-col-12 no-gap">
                    <div class="pin-spacer">
                        <div data-navigate="drag" class="alioth-image-carousel">

                            <div class="ai-wrapper" style="transform: translate(0px, 0px);">

                                @foreach($car->img as $img)
                                    <div class="ai-image single-image lightbox" data-lightbox="{{$img->url}}">
                                        <img alt="Carousel Image" src="{{$img->url}}">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="page-content">
            <div class="single-product-wrap">

                <div class="single-product-details">
                    <div class="product-title">
                        <h1>{{ ($car->zerokm == '1' ? '0km' : 'Seminovo') }}<br>{{$car->anofabricacao}}
                            / {{$car->anomodelo}}</h1>
                        <p>
                            {{($car->km != '0' ? $car->km . ' km' : '')}}
                        </p>
                    </div>

                    <div class="product-price">{{$car->preco}}</div>

                    <div class="product-summary">
                        <script type="text/javascript"
                                src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61c22260ce5c7010"></script>
                        <div class="addthis_inline_share_toolbox_26fe"></div>
                    </div>

                    <div class="product-dets">

                        @foreach($complements as $complement)
                            @if($complement == 'Blindado')
                                <span style="background:#000;border-radius: 20px; padding:5px 10px;margin:10px auto;width:auto;color:white">{{$complement}}</span><br><br>
                            @else
                                <span>{{$complement}}</span><br><br>
                            @endif
                        @endforeach

                    </div>
                </div>

                <div class="single-product-meta">

                    <ul class="car-list">
                        @foreach($opcinals as $opcinal)
                            <li>{{$opcinal}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <style>
                .car-list{
                    -moz-column-count: 3;
                    -moz-column-gap: 20px;
                    -webkit-column-count: 3;
                    -webkit-column-gap: 20px;
                    column-count: 3;
                    column-gap: 20px;
                }

                @media only screen and (max-width: 768px) {
                    .car-list{
                        -moz-column-count: 2;
                        -moz-column-gap: 20px;
                        -webkit-column-count: 2;
                        -webkit-column-gap: 20px;
                        column-count: 2;
                        column-gap: 20px;
                        padding-bottom: 0.5em;
                    }

                    .single-product-wrap {
                        padding-bottom:0 !important;
                    }
                }
            </style>



            <div class="c-col-12 no-gap no-margin text-center">

                <div class="a-button style_1">

                    <a href="javascript:history.back()">Voltar</a>
                    <i class="icofont-arrow-left"  style="padding-top: 25px;"></i>

                </div>
            </div>

        </div>

    </div>



@endsection
