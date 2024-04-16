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

    <section class="welcome-section">
        <div class="auto-container">
            <div class="title-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                 style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h4>UNIDADE II</h4>
                <h2><strong>Praia Grande</strong></h2>
                <div class="text">
                    Av Presidente Kennedy 1550, Guilhermina - Praia Grande/SP

                </div>
            </div>
            <div class="image-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7261331907853!2d-46.427708223901185!3d-24.005446178058662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c3381411ef7%3A0x6fdd8d5d9a588bd1!2sAv.%20Pres.%20Kennedy%2C%201550%20-%20Guilhermina%2C%20Praia%20Grande%20-%20SP%2C%2011702-200!5e0!3m2!1spt-BR!2sbr!4v1713287303769!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>

@endsection
