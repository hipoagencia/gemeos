@extends('web.master.master')

@section('content')


    <div id="page" data-barba="container">

        <!-- Page Content -->
        <div id="content" class="page-content">


            <div class="section">


                <div class="wrapper">

                    <span class="a-empty-space" style="height: 200px"></span>


                    <div class="c-col-12">

                        <!--Linked Text-->
                        <div data-height="95" class="hello-heading linked-text dark hide_mobile">

                            <h1 class="big-title">
                                A maior
                                <br>experiência
                                <br>em carros
                                <br>premium.
                            </h1>

                        </div>
                        <!--/Linked Text-->
                        <!--Linked Text-->
                        <div data-height="55" class="hello-heading linked-text dark hide_desktop">

                            <h1 class="big-title">
                                A maior
                                <br>experiência
                                <br>em carros
                                <br>premium.
                            </h1>

                        </div>

                    </div>
                </div>
            </div>


            <div class="section">


                <div class="wrapper-full no-gap">


                    <div class="c-col-12 no-gap">

                        <!--Embed Video-->
                        <div data-interaction="false" data-autoplay="true" class="alioth-embed-video">

                            <!--Video Attributes-->
                            <div data-poster="false" class="embed-video" data-plyr-provider="vimeo"
                                 data-plyr-embed-id="670844516"></div>
                            <!--/Video Attributes-->

                        </div>
                        <!--/Embed Video-->

                    </div>
                    <!--/Column-->

                </div>


            </div>


            <div class="section">


                <div class="wrapper-small no-margin">

                    <div class="c-col-3"></div>


                    <div class="c-col-9">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h1 class="has-anim" data-stagger="0.01" data-duration="1.5" data-delay=".1"
                                data-animation="charsUp">A grife dos carros.</h1>
                        </div>
                        <!--/Text Wrapper-->
                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h5 style="color: rgba(25,27,29,.6)" class="has-anim" data-stagger="0.1" data-duration="1"
                                data-delay=".1" data-animation="linesUp">
                                Muito mais que um negócio, trata-se de um propósito de vida.
                                <br><br>
                                Paixão e dedicação, essas são as marcas registradas de quem está à frente da One Motors.
                                <br><br>
                                Somos especializados naquilo que há de melhor no mundo dos carros, afinal nosso compromisso é transformar seu sonho em realidade
                            </h5>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->

                </div>

            </div>


            <div class="section" style="margin-bottom:0px;">


                <div class="wrapper no-gap">


                    <div class="c-col-12 no-gap">

                        <!--Alioth Recent Works-->
                        <div data-navigate="scroll" class="a-recent-works light">

                            <!--Background Text-->
                            <div style="color: rgba(25,27,29,.2)" class="recent-works-bg-text">
                                One Selection
                            </div>




                            <div class="" >
                                <div class="wrapper-full no-gap">
                                    <div class="c-col-12 no-gap">
                                        <div class="pin-spacer">
                                            <div data-navigate="drag" class="alioth-image-carousel">

                                                <div class="ai-wrapper" style="transform: translate(0px, 0px);">



                                                        @foreach($cars as $car)
                                                            <div class="ai-image single-image lightbox">
                                                                <a href="{{route('web.stockOpen', ['slug' => $car->slug])}}">
                                                                    <div class="ar-work-image">
                                                                        <img alt="Project Image" src="{{$car->cover->url}}">
                                                                    </div>
                                                                    <div class="ar-work-title">{{$car->modelo}} {{$car->anomodelo}}</div>
                                                                    <div class="ar-work-cat">{{$car->preco}}</div>
                                                                </a>
                                                            </div>
                                                        @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

<style>
    * a{
        text-decoration: none;
    }
</style>


{{--                            <!--Background Text-->--}}
{{--                            <!--Navigation (Don't Touch)-->--}}
{{--                            <div class="a-recent-works-nav">--}}
{{--                                <div class="arw-prev"><i class="icofont-long-arrow-left"></i></div>--}}
{{--                                <div class="arw-next"><i class="icofont-long-arrow-right"></i></div>--}}
{{--                            </div>--}}
{{--                            <!--Navigation (Don't Touch)-->--}}
{{--                            <!--Works Wrapper-->--}}
{{--                            <div class="recent-works-wrapper">--}}

{{--                                @foreach($cars as $car)--}}
{{--                                    <div class="ar-work">--}}
{{--                                        <a href="{{route('web.stockOpen', ['slug' => $car->slug])}}">--}}
{{--                                            <div class="ar-work-image">--}}
{{--                                                <img alt="Project Image" src="{{$car->cover->url}}">--}}
{{--                                            </div>--}}
{{--                                            <div class="ar-work-title">{{$car->modelo}} {{$car->anomodelo}}</div>--}}
{{--                                            <div class="ar-work-cat">{{$car->preco}}</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}

{{--                            </div>--}}



                        </div>
                    </div>
                </div>
            </div>


            <div class="section">
                <div class="wrapper-full no-margin">
                    <div class="c-col-12 no-gap no-margin text-center">
                        <div class="a-button style_1">

                            <a href="{{route('web.stock')}}">Estoque Completo</a>
                            <i class="icofont-arrow-right"></i>

                        </div>
                    </div>
                </div>

            </div>

{{--            <div class="section">--}}
{{--                <div class="wrapper-full no-margin">--}}
{{--                    <div class="c-col-12 no-gap no-margin">--}}
{{--                        <div class="alioth-page-nav" style="background-color: #f1f1f1">--}}
{{--                            <a href="{{route('web.stock')}}">--}}
{{--                                <div class="page-title"> Estoque</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}


        </div>
        <!-- /Page Content -->

    </div>



    @include('cookieConsent::index')

@endsection



