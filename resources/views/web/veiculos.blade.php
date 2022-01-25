@extends('web.master.master')

@section('content')


    <div id="page" class="shop-page" data-barba="container" style="visibility: visible;">

        <!-- Page Header -->
        <div class="page-header" data-anim="true">

            <div class="page-header-wrap wrapper-small">

                <!-- Page Title -->
                <div class="page-title">
                    <h1 class="big-title">
                        <div style="position:relative;display:inline-block;" class="pt-word">
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">E
                            </div>
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">s
                            </div>
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">t
                            </div>
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">o
                            </div>
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">q
                            </div>
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">u
                            </div>
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0%);"
                                 class="pt-char">e
                            </div>
                        </div>
                    </h1>
                </div>
                <!-- /Page Title -->

            </div>

        </div>
        <!-- /Page Header -->
        <!-- Page Content -->
        <div id="content" class="page-content">

            <!--Section-->
            <div class="section">
                <div class="wrapper">
                    <div class="c-col-2 shop-sidebar hide_mobile">
                        <div class="widget product-categories">
                            <div class="widget-title">Marcas</div>
                            <ul class="product-cats">

                                @foreach($categories as $category)
                                    <li><a href="{{route('web.stock',['category' => Illuminate\Support\Str::slug($category)])}}">{{$category}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


                    <div class="c-col-10">
                        <div class="alioth-products column_3">
                            <div class="products-met">
                                <div class="products-count">
                                    Mostrando {{$cars->count()}} de um total de {{$cars->total()}}
                                </div>
                            </div>

                            <div class="alioth-products-wrapper">
                                <div class="grid-sizer"></div>
                                <div class="gutter"></div>

                                @foreach($cars as $car)
                                    @include('web.components.car')
                                @endforeach
                            </div>

                            <div class="row">
                                {{ $cars->render("pagination::bootstrap-4") }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
