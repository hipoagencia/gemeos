@extends('web.master.master')

@section('content')

    <section class="page-banner">
        <div class="image-layer"
             style="background-image:url({{url(asset('web/assets/images/background/banner-1.jpg'))}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix" style="padding-top:200px;">
                    <h1>Unidade</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="welcome-section">
        <div class="auto-container">
            <div class="title-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                 style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h4>UNIDADE I</h4>
                <h2><strong>São Vicente</strong></h2>
                <div class="text">
                    Av. Antônio Emmerich, 918 - Vila Cascatinha, São Vicente/SP
                </div>
            </div>
            <div class="image-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14584.205396291809!2d-46.3759289!3d-23.9586243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x708c3aba768e9eb6!2zR8OqbWVvcyBWZcOtY3Vsb3M!5e0!3m2!1spt-BR!2sbr!4v1647889544746!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
    </section>

@endsection
