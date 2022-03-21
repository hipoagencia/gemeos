@extends('web.master.master')

@section('content')

    <section class="page-banner">
        <div class="image-layer"
             style="background-image:url({{url(asset('web/assets/images/background/banner-1.jpg'))}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix" style="padding-top:200px;">
                    <h1>Sobre</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="welcome-section">
        <div class="auto-container">
            <div class="title-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                 style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h2><strong>Gêmeos Veículos</strong></h2>
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elit metus, ultrices dictum venenatis nec, rhoncus a orci. Duis suscipit mi eu magna fermentum auctor. Vestibulum et vehicula enim. In non lacus eleifend, ornare erat et, tristique enim. Curabitur purus odio, cursus eget sem placerat, gravida semper tortor. Curabitur interdum accumsan magna, at elementum dui laoreet sit amet. Vivamus vitae tortor lobortis, feugiat arcu id, viverra ante. Donec accumsan maximus placerat. Aenean in dui quam.
                </div>
            </div>
            <div class="image-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="{{url(asset('web/assets/images/resource/featured-image-28.jpg'))}}" alt="">
            </div>

        </div>
    </section>

@endsection
