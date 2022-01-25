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


        <div class="page-content">
            <div class="single-product-wrap">
                {{--                <div class="single-product-slider">--}}
                {{--                    <div--}}
                {{--                        class="sp-slider swiper-container swiper-container-initialized swiper-container-vertical swiper-container-pointer-events">--}}

                {{--                        <div class="swiper-wrapper" id="swiper-wrapper-9dc3fa1d5dd101bee" aria-live="polite"--}}
                {{--                             style="transform: translate3d(0px, 0px, 0px);">--}}


                {{--                            @foreach($car->img as $img)--}}
                {{--                                <div class="swiper-slide sp-image swiper-slide-active" role="group" aria-label="1 / 4">--}}

                {{--                                    <img alt="{{$car->marca}} {{$car->modelo}}" src="{{$img->url}}">--}}

                {{--                                </div>--}}
                {{--                            @endforeach--}}


                {{--                        </div>--}}
                {{--                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>--}}

                {{--                    <div class="sp-dots swiper-pagination-clickable swiper-pagination-bullets">--}}
                {{--                    </div>--}}

                {{--                    <div class="sp-arrows">--}}
                {{--                        <div class="sp-next swiper-button-disabled" tabindex="-1" role="button"--}}
                {{--                             aria-label="Previous slide" aria-controls="swiper-wrapper-9dc3fa1d5dd101bee"--}}
                {{--                             aria-disabled="true"><i class="icofont-thin-up"></i></div>--}}
                {{--                        <div class="sp-prev" tabindex="0" role="button" aria-label="Next slide"--}}
                {{--                             aria-controls="swiper-wrapper-9dc3fa1d5dd101bee" aria-disabled="false"><i--}}
                {{--                                class="icofont-thin-down"></i></div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

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

                    <ul>
                        @foreach($opcinals as $opcinal)
                            <li>{{$opcinal}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>


            <div class="section">
                <div class="wrapper-full no-gap">
                    <div class="c-col-12 no-gap">
                        <div class="pin-spacer">
                            <div data-navigate="scroll" class="alioth-image-carousel">

                                <div class="ai-wrapper" style="transform: translate(0px, 0px);">

                                    @foreach($car->img as $img)
                                        <div class="ai-image">
                                            <img alt="Carousel Image" src="{{$img->url}}">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
