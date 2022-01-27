@extends('web.master.master')

@section('content')

    <div id="page" data-barba="container" style="visibility: visible;">

        <!-- Page Header -->
        <div data-anim="true" class="page-header">

            <div class="page-header-wrap wrapper-small">
                <div class="page-title">
                    <h1 class="big-title">Contato</h1>
                </div>
            </div>

        </div>
        <!-- /Page Header -->

        <!-- Page Content -->
        <div id="content" class="page-content">

            <!--Section-->
            <div class="section">

                <!--Wrapper-->
                <div class="wrapper">

                    <!--Column-->
                    <div class="c-col-6">

                        <div class="alioth-form">

                            <div action="" method="post">


                                <!-- Form Field -->
                                <div class="field-wrap">
                                    <label>
                                        Nome
                                    </label>
                                    <input type="email" required="" autocomplete="off">
                                </div>
                                <!--/ Form Field -->

                                <!-- Form Field -->
                                <div class="field-wrap">
                                    <label>
                                        WhatsApp
                                    </label>
                                    <input type="email" required="" autocomplete="off">
                                </div>
                                <!--/ Form Field-->

                                <!-- Form Field -->
                                <div class="field-wrap">
                                    <label>
                                        E-mail
                                    </label>
                                    <input type="email" required="" autocomplete="off">
                                </div>
                                <!--/ Form Field-->

                                <!-- Form Field -->
                                <div class="field-wrap">
                                    <label>
                                        Assunto
                                    </label>
                                    <input type="email" required="" autocomplete="off">
                                </div>
                                <!--/ Form Field -->

                                <!-- Form Field (Textarea)-->
                                <div class="message-wrap">
                                    <label>
                                        Mensagem
                                    </label>
                                    <textarea rows="8"></textarea>
                                </div>
                                <!--/ Form Field (Textarea)-->

                                <!-- Button -->
                                <div class="send-wrap">
                                    <button type="submit" class="button button-block">Enviar</button>
                                </div>
                                <!--/ Button -->

                            </div>
                        </div>
                        <!--/Contact Form -->

                    </div>
                    <!--/Column-->

                    <!--Column-->
                    <div style="margin-top: -100px" class="c-col-6">

                        <!--Single Image-->
                        <div class="single-image" style="height: 711px; width: 477px;">

                            <div class="img-anim-wrapper"><img class="has-anim" data-animation="slideUp" data-duration="2" data-delay="0" alt="Single Image" src="{{asset(url('web/assets/img/contact-img.jpg'))}}" ></div>

                        </div>
                        <!--/Single Image-->

                    </div>
                    <!--/Column-->

                </div>
                <!--/Wrapper-->

            </div>
            <!--/Section -->


            <!--Section-->
            <div style="background: #ebebeb; padding-top: 100px;padding-bottom: 30px" class="section no-margin">

                <!--Wrapper-->
                <div class="wrapper-small">

                    <!--Column-->
                    <div class="c-col-4">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h2 style="margin-bottom: 0">Unidade I</h2>
                            <p style="color: #191b1d">Rua Senador Feijó, 123                                Santos/SP</p>

                            <span style="height: 50px" class="a-empty-space"></span>

                            <a class="inner-button dark" href="#.">13 3027-4731</a>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->

                    <!--Column-->
                    <div class="c-col-4">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h2 style="margin-bottom: 0">Unidade II</h2>
                            <p style="color: #191b1d">Rua Senador Feijó, 123                                Santos/SP</p>

                            <span style="height: 50px" class="a-empty-space"></span>

                            <a class="inner-button dark" href="#.">13 3027-4731</a>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->

                    <!--Column-->
                    <div class="c-col-4">

                        <!--Text Wrapper-->
                        <div class="text-wrapper">

                            <h2 style="margin-bottom: 0">Unidade III</h2>
                            <p style="color: #191b1d">Rua Senador Feijó, 123                                Santos/SP</p>

                            <span style="height: 50px" class="a-empty-space"></span>

                            <a class="inner-button dark" href="#.">13 3027-4731</a>

                        </div>
                        <!--/Text Wrapper-->

                    </div>
                    <!--/Column-->

                </div>
                <!--/Wrapper-->

            </div>
            <!--/Section -->

            <!--Section -->
            <div class="section">

                <!--Wrapper-->
                <div class="wrapper-full no-margin">

                    <!--Column-->
                    <div class="c-col-12 no-gap no-margin">

                        <!-- Page Nav -->
                        <div class="alioth-page-nav" style="background-color: #f1f1f1">

                            <!--Page URL-->
                            <a href="{{route('web.about')}}">

                                <div class="page-title">
                                    Sobre a One Motors
                                </div>

                            </a>

                        </div>
                        <!-- /Page Nav -->

                    </div>
                    <!--/Column-->

                </div>
                <!--/Wrapper-->

            </div>
            <!--/Section -->

        </div>
        <!-- /Page Content -->

    </div>

@endsection
