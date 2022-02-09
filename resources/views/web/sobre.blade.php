@extends('web.master.master')

@section('content')


    <div id="page" data-barba="container">

        <!-- Page Content -->
        <div id="content" class="page-content">

            <!--Section-->
            <div class="section">

                <!--Wrapper-->
                <div class="wrapper" style="margin-top:70px;">

                    <span class="a-empty-space hide_mobile" style="height: 250px"></span>
                    <span class="a-empty-space hide_desktop" style="height: 130px"></span>

                    <!--Column-->
                    <div class="c-col-12">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h1 class="has-anim big-title" data-stagger="0.01" data-duration="1.2" data-delay="0" data-animation="charsUp">
                                One Motors<br>
                                A grife dos carros
                            </h1>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->

                    <!--Column-->
                    <div class="c-col-4">
                    </div>
                    <!--/Column-->

                    <!--Column-->
                    <div class="c-col-8">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h4 style="color: rgba(25,27,29,.6)" class="has-anim" data-stagger="0.05" data-duration="1.25" data-delay=".5" data-animation="linesUp">
                                Pense nas marcas mais importantes do planeta e em modelos que definem tendência e constroem sonhos. Agora, imagine isso tudo no mesmo lugar.
                                One Motors. Venha conhecer uma de nossas unidades e viva uma experiência inesquecível.

                            </h4>

                        </div>
                        <!--/Text Wrapper-->

                        <span class="a-empty-space" style="height: 30px"></span>

                        <!--Seperator-->
                        <span data-color="rgba(25,27,29,.6)" data-anim="true" class="alioth-seperator"></span>
                        <!--/Seperator-->

                        <span class="a-empty-space" style="height: 30px"></span>

                    </div>

                </div>
                <!--/Wrapper-->

            </div>
            <!--/Section -->

            <!--Section-->
            <div style="background: #131313" class="section">

                <!--Wrapper-->
                <div class="wrapper">

                    <!--Column-->
                    <div class="c-col-12 has-parallax" data-parallax-strength="0.1" data-parallax-direction="up">

                        <!--Embed Video-->
                        <div data-autoplay="true" class="alioth-embed-video">

                            <!--Player Control (Don't touch)-->
                            <div class="video-overlay"><span class="play-button"></span></div>
                            <!--/Player Control (Don't touch)-->

                            <!--Video Attributes-->
                            <div class="embed-video" data-plyr-provider="vimeo" data-plyr-embed-id="670844516"></div>
                            <!--/Video Attributes-->

                        </div>
                        <!--/Embed Video-->

                    </div>
                    <!--/Column-->

                </div>
                <!--/Wrapper-->

                <!--Wrapper-->
                <div class="wrapper-small">

                    <!--Column-->
                    <div class="c-col-12">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h1 style="color: #fff" class="big-title has-anim" data-stagger="0.01" data-duration="1.5" data-delay="0" data-animation="charsUp">
                                Visão
                            </h1>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->


                    <!--Column-->
                    <div class="c-col-3">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h5 style="color:hsla(0,0%,100%,.4)" class="has-anim" data-stagger="0.02" data-duration="1" data-delay=".1" data-animation="charsDown">
                                Missão e Valores
                            </h5>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->

                    <!--Column-->
                    <div class="c-col-9">
                        <div class="text-wrapper">

                            <h4 style="color: #fff" class="has-anim" data-stagger="0.1" data-duration="1" data-delay=".1" data-animation="linesUp">
                                Oferecer os melhores produtos no segmento automobilístico, com garantia e segurança a seus clientes, agregando a isso um atendimento profissional e personalizado.
                            </h4>


                        </div>
                    </div>
                </div>

                <div class="wrapper-full" style="margin-bottom:0px;">
                    <div class="c-col-12">
                        <div class="scrollable-text">
                            <h1 class="big-title" style="color: #fff">
                                A grife dos carros
                            </h1>

                        </div>
                    </div>
                </div>

{{--                <div class="wrapper-full">--}}
{{--                    <div data-parallax-strength="0.2" data-parallax-direction="down" class="c-col-4 has-parallax">--}}
{{--                        <div class="single-image">--}}
{{--                            <img class="has-anim" data-animation="blockLeft" data-duration="1" data-delay="0" data-color="#000" alt="Single Image" src="{{asset(url('web/assets/img/about-us-light-1.jpg'))}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div data-parallax-strength="0.05" data-parallax-direction="up" class="c-col-4 has-parallax">--}}
{{--                        <div class="single-image">--}}
{{--                            <img class="has-anim" data-animation="blockLeft" data-duration="1" data-delay="0" data-color="#000" alt="Single Image" src="{{asset(url('web/assets/img/about-us-light-2.jpg'))}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div data-parallax-strength="0.15" data-parallax-direction="down" class="c-col-4 has-parallax">--}}
{{--                        <div class="single-image">--}}
{{--                            <img class="has-anim" data-animation="blockLeft" data-duration="1" data-delay="0" data-color="#000" alt="Single Image" src="{{asset(url('web/assets/img/about-us-light-3.jpg'))}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>


@endsection
