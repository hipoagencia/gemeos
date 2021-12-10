<div class="blog-post box-shadow-small border-radius-6px">
    <div class="blog-post-image cover-background xs-h-250px"
         style="background-image: url('{{url(asset($post->cover))}}')">
        <a href="{{ route('web.post', ['category' => $post->categories[0]->slug,'slug' => $post->slug]) }}"
           class="blog-post-image-overlay bg-dark-slate-blue"></a>
    </div>
    <div
        class="post-details bg-white padding-3-half-rem-all lg-padding-2-half-rem-all md-padding-3-half-rem-all">
        <div class=" margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">
            @foreach($post->categories as $category)
                <a href="{{ route('web.category', ['category' => $category->slug]) }}"
                   class="blog-category alt-font text-extra-dark-gray border-color-black-transparent bg-white align-self-start">{{$category->name}}</a>
                <br>
            @endforeach
        </div>

        <a href="{{ route('web.post', ['category' => $post->categories[0]->slug,'slug' => $post->slug]) }}"
           class="font-weight-500 text-large line-height-24px text-extra-dark-gray margin-15px-bottom xs-margin-10px-bottom">
            {{ $post->name }}</a>
        <p>{{ $post->preview() }}</p>
        <span
           class="alt-font font-weight-500 text-small text-dark-gray text-uppercase align-self-start">{{ $post->user->name }} {{ $post->user->last_name }}</span>
    </div>
</div>
