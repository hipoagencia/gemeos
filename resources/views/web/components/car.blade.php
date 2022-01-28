<div class="col-12 col-md-4">
    <a href="{{route('web.stockOpen', ['slug' => $car->slug])}}">
        <div class="product-image">
            <img alt="Carro"  src="{{$car->cover->url}}" class="img-fluid">
        </div>
    </a>

    <div class="produt-info">
        <b class="font-size-20">{{$car->marca}}</b>
        <div class="product-title">{{$car->modelo}}</div>
        <span>{{$car->versao}}</span>
        <div class="product-price">{{$car->preco}}</div>
    </div>
</div>


