@extends('web.master.master')

@section('content')

    <div id="page" data-barba="container" style="visibility: visible;">

        <!-- Page Header -->
        <div data-anim="true" class="page-header">

            <div class="page-header-wrap wrapper-small">
                <div class="page-title">
                    <h1 class="big-title">Unidades</h1>
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


                    <div class="c-col-3 footer-widget">
                        <div class="alioth-text-box">
                            <h5 style="color: rgba(25,27,29,.6)">
                                <b>Unidade I<br>Santos/SP</b><br /><br />

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.301467345728!2d-46.33043848446854!3d-23.94977758193684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0376a61a52b5%3A0x9dc747b2663d4693!2sR.%20Comendador%20Martins%2C%20237%20-%20Vila%20Matias%2C%20Santos%20-%20SP%2C%2011015-531!5e0!3m2!1spt-BR!2sbr!4v1644268238192!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                <br><br>
                                Rua Comendador</br>Martins, 237
                        </div>
                    </div>

                    <div class="c-col-3 footer-widget">
                        <div class="alioth-text-box">
                            <h5 style="color: rgba(25,27,29,.6)">
                                <b>Unidade II<br>Praia Grande/SP</b><br /><br />
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.782582685803!2d-46.41564598501385!3d-24.00345348446522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c4cc6d53947%3A0x15e7f4381efc3289!2sR.%20Limeira%2C%2025%20-%20Boqueir%C3%A3o%2C%20Praia%20Grande%20-%20SP%2C%2011701-260!5e0!3m2!1spt-BR!2sbr!4v1644268123276!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                <br><br>
                                Rua Limeira, 25<br>
                                <hr>
                                Tel.: <a href="tel:1335007259" style="color: rgba(25,27,29,.6);">(13) 3500-7259</a>
                            </h5>
                        </div>
                    </div>

                    <div class="c-col-3 footer-widget">
                        <div class="alioth-text-box">
                            <h5 style="color: rgba(25,27,29,.6)">
                                <b>Unidade III<br>Praia Grande/SP</b><br><br>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.0984064991203!2d-46.404936784467694!3d-23.99230188353359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c572e0aa3bd%3A0xed0e4ba3a8ee8af0!2sAuto%20Shopping%20Praia%20Grande!5e0!3m2!1spt-BR!2sbr!4v1644268216394!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <br /><br/>
                                Av. Ayrton Senna da Silva,<br>611 - Loja 33<br>
                                <hr>
                                Tel.: <a href="tel:1335007258" style="color: rgba(25,27,29,.6);">(13) 3500-7258</a>
                            </h5>
                        </div>
                    </div>

                    <div class="c-col-3 footer-widget">
                        <div class="alioth-text-box">
                            <h5 style="color: rgba(25,27,29,.6)">
                                <b>Unidade IV<br>Santos/SP</b><br />
                                <br>Em breve
                            </h5>
                        </div>
                    </div>


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
                            <a href="{{route('web.stock')}}">

                                <div class="page-title">
                                    Estoque Completo
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
