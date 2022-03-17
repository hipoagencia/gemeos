@extends('web.master.master')

@section('content')

    <section class="page-banner">
        <div class="image-layer"
             style="background-image:url({{url(asset('web/assets/images/background/banner-1.jpg'))}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix" style="padding-top:200px;">
                    <h1>Estoque</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="rent-buy-section">
        <div class="auto-container">
            <div class="form-tabs tabs-box">
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#filter-tab">Pesquisar</li>
                </ul>
                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="filter-tab">
                        <div class="default-form yacht-search-form">
                            <form method="get"
                                  action="{{route('web.stock')}}">

                                <div class="row clearfix">

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-check"></span></div>
                                            <select class="custom-select-box" name="category" id="ui-id-1"
                                                    style="display: none;">

                                                <option value="0">--- Marca ---</option>
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{Illuminate\Support\Str::slug($category)}}" {{ (request()->category == Illuminate\Support\Str::slug($category) ? 'selected' : '') }}>{{$category}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon">R$</div>
                                            <input type="text" name="min" placeholder="Valor Mínimo" value="{{request()->min}}">
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon">R$</div>
                                            <input type="text" name="max" placeholder="Valor Máximo" value="{{request()->max}}">
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn"><span class="btn-title"><span
                                                    class="icon flaticon-magnifying-glass"></span> Buscar</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="lower-filter-row clearfix">
                <div class="results-count">
                    <span>Mostrando {{$cars->count()}} de um total de {{$cars->total()}}</span>
                </div>
            </div>

            <div class="results-row">
                <div class="row clearfix">

                    @foreach($cars as $car)
                        @include('web.components.car')
                    @endforeach

                </div>

                <div class="row mt-4">
                    {{ $cars->render("pagination::bootstrap-4") }}
                </div>

                {{--                <!--Pagination-->--}}
                {{--                <div class="pagination-box text-center">--}}
                {{--                    <ul class="styled-pagination">--}}
                {{--                        <li><a href="#" class="prev"><span class="icon flaticon-back"></span></a></li>--}}
                {{--                        <li><a href="#" class="active">1</a></li>--}}
                {{--                        <li><a href="#">2</a></li>--}}
                {{--                        <li><a href="#" class="next"><span class="icon flaticon-next"></span></a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>

@endsection
