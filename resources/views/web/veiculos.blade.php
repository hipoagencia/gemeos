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
                                    <li>
                                        <a href="{{route('web.stock',['category' => Illuminate\Support\Str::slug($category)])}}">{{$category}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


                    <div class="c-col-10">
                        <div class="alioth-products column_3">

                            <form action="{{route('web.stock')}}" method="POST" class="hide_desktop">
                                @csrf
                                <div class="">
                                    <b>Filtre por marca</b>
                                    {{--                                    <select id="categ" name="category" class="form-select mb-5" onchange="this.form.submit()">--}}
                                    <select id="categ" name="category" class="form-select mb-4 mt-2">

                                        @foreach($categories as $category)
                                            <option
                                                value="{{Illuminate\Support\Str::slug($category)}}" {{request()->category == Illuminate\Support\Str::slug($category) ? 'selected' : ''}}>{{$category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>


                            <div class="container">
                                <div class="row">

                                    <div class="products-count mb-4">
                                        Mostrando {{$cars->count()}} de um total de {{$cars->total()}}
                                    </div>

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

@section('js')
                                <script type="text/javascript">
                                    $('#categ').on('change', function(e){
                                        var select = $(this), form = select.closest('form');
                                        form.attr('action', '/veiculos/' + select.val());
                                        form.submit();
                                    });
                                </script>
@endsection
