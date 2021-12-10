@extends('web.master.masterBlog')

@section('content')

    <section class="h-700px sm-h-400px xs-h-300px overlap-height cover-background"
             style="background: url('{{ url(asset($post->cover)) }}');">
        <div class="overlay-bg bg-full-green mob-displaynone" style="opacity: 0.6;"></div>
    </section>

    <div
        style="background-image:url('{{ url(asset('web/assets/images/detal.jpg')) }}');background-repeat: no-repeat; background-position: top;">

        <section class="pb-0 pt-md-0 overflow-visible blog-padding-t">
            <div class="container">
                <div class="row justify-content-center overlap-section z-index-0" style="margin-top: -205.094px;">
                    <div
                        class="col-12 col-lg-10 alt-font text-center bg-full-green text-white padding-7-rem-tb position-relative tilt-box"
                        data-tilt-options="{ &quot;maxTilt&quot;: 20, &quot;perspective&quot;: 1000, &quot;easing&quot;: &quot;cubic-bezier(.03,.98,.52,.99)&quot;, &quot;scale&quot;: 1, &quot;speed&quot;: 500, &quot;transition&quot;: true, &quot;reset&quot;: true, &quot;glare&quot;: false, &quot;maxGlare&quot;: 1 }"
                        style="background-image: url('{{ url(asset('images/blog-post-layout-02-img-pattern.png')) }}'); will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <div class="w-1px h-90px bg-white mx-auto absolute-middle-center top-0px"></div>
                        <div class="text-uppercase text-medium font-weight-500 margin-25px-bottom alt-font">

                            @foreach($post->categories as $category)
                                <a href="{{ route('web.category', ['category' => $category->slug]) }}"
                                   class="text-white d-inline-block">{{ $category->name }}</a>
                                @if(!$loop->last)
                                    <span class="margin-20px-lr w-1px h-10px bg-white d-inline-block"></span>
                                @endif
                            @endforeach

                        </div>
                        <h3 class="font-weight-600 w-50 mx-auto md-w-70 xs-w-90">{{ $post->name }}</h3>
                        <div class="d-inline-block text-white-transparent margin-5px-top">Por <span
                                class="d-inline-block text-white-transparent text-white-hover">{{ $post->user->name }} {{ $post->user->last_name }}</span>
                            publicado em {{ $post->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="big-section" style="padding-top:50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 p-sm-0">


                        {!! $post->description !!}


                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
