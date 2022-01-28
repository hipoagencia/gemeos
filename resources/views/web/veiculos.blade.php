@extends('web.master.master')

@section('content')


    <div id="page" class="shop-page" data-barba="container" style="visibility: visible;">

        <!-- Page Header -->
        <div class="page-header" data-anim="true">

            <div class="page-header-wrap wrapper-small">

                <!-- Page Title -->
                <div class="page-title">
                    <h1 class="big-title">
                        Estoque
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

                            <div class="container">
                                <div class="row">

                                    @foreach($cars as $car)
                                        @include('web.components.car')
                                    @endforeach

                                </div>
                            </div>

                            <div class="row mt-4">
                                {{ $cars->render("pagination::bootstrap-4") }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
