<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{env('APP_NAME')}}</title>

    <meta name="robots" content="noindex" />
</head>
<body>

<div style="text-align: center;padding-top:80px;">

    <img src="{{asset(url('web/assets/img/logo_constru.png'))}}" width="150" style="margin-bottom:50px;"/>

    <h1 style="font-size:60px">{{$car->marca}} {{$car->modelo}}<br>{{$car->versao}}</h1>
    <h2  style="font-size:50px">{{$car->anofabricacao}} / {{$car->anomodelo}}</h2>
    <h2  style="font-size:40px">{{$car->km}} km</h2>

    <hr>

    <ul class="car-list" style="width: 50%; margin:0px auto; padding-top:70px;padding-bottom:70px;">
        @foreach($opcinals as $opcinal)
            <li>{{$opcinal}}</li>
        @endforeach
    </ul>

    <hr>

    <h1  style="font-size:50px">{{$car->preco}} </h1>


</div>

<style type="text/css">
    *{
        font-family:Arial;
    }
    .car-list{
        -moz-column-count: 3;
        -moz-column-gap: 20px;
        -webkit-column-count: 3;
        -webkit-column-gap: 20px;
        column-count: 3;
        column-gap: 20px;
    }

    @media only screen and (max-width: 768px) {
        .car-list{
            -moz-column-count: 2;
            -moz-column-gap: 20px;
            -webkit-column-count: 2;
            -webkit-column-gap: 20px;
            column-count: 2;
            column-gap: 20px;
            padding-bottom: 0.5em;
        }

        .single-product-wrap {
            padding-bottom:0 !important;
        }
    }
</style>

</body>
</html>
