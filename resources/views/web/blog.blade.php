@extends('web.master.masterBlog')

@section('content')

<div style="background-image:url('{{ url(asset('web/assets/images/detal.jpg')) }}');background-repeat: no-repeat; background-position: top;">

    <section class="half-section parallax" data-parallax-background-ratio="0.5" >
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font color-full-brown margin-15px-bottom d-inline-block">As melhores notícias e os melhores imóveis de</h1>
                    <h2 class="color-full-green alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Riviera de São Lourenço</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray pt-0 padding-five-lr lg-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12 col-lg-12 col-sm-10 blog-content lg-no-padding-lr">
                    <ul class="blog-simple blog-wrapper grid grid-loading grid-3col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->

                        @foreach($posts as $post)
                            <li class="grid-item wow animate__fadeIn">

                                @include('web.components.post')

                            </li>
                        @endforeach

                    </ul>
                    <!-- start pagination -->
                    <div
                        class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top xs-margin-4-rem-top wow animate__fadeIn">

                        {{ $posts->render("pagination::bootstrap-4") }}

                    </div>
                    <!-- end pagination -->
                </div>
            </div>
        </div>
    </section>

</div>

    <style>
        .page-item.active .page-link {
            color: #fff;
            background-color: #253a36 !important;
            border-color: #253a36 !important;
        }
    </style>

@endsection
