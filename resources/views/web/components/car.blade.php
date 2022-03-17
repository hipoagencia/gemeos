<div class="rental-block col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box">
        <div class="image-box">
            <figure class="image">
                <a href="{{route('web.stockOpen', ['slug' => $car->slug])}}"><img src="{{$car->cover->url}}" alt="" title=""></a>
            </figure>
            <div class="price-box">
                <div class="price">R$ {{$car->preco}}</div>
            </div>
        </div>
        <div class="title-box">
            <div class="more-link-box">
                <a href="{{route('web.stockOpen', ['slug' => $car->slug])}}" class="theme-btn">Mais Informações</a>
            </div>
            <h4><a href="#">{{$car->marca}} {{$car->modelo}}</a></h4>
            <div class="info">{{$car->versao}}</div>
        </div>
        <div class="meta-info">
            <ul class="clearfix">
                <li><a href="{{route('web.stockOpen', ['slug' => $car->slug])}}"><span class="icon flaticon-calendar"></span> Ano: {{$car->anomodelo}}</a></li>
                <li><a href="{{route('web.stockOpen', ['slug' => $car->slug])}}#"><span class="icon flaticon-user"></span> Cor: {{$car->cor}}</a></li>
            </ul>
        </div>
    </div>
</div>


