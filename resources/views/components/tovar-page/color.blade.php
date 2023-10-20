<a href="{{route('product',$tovar->slug)}}"  class="texture-column">
    <div class="texture_blk">
        <div class="img">
            <img src="{{$tovar->color_img}}" alt="Смотрите так же {{$tovar->title}}">
        </div>
        <div class="title">
            <h3>{{$tovar->title}}</h3>
        </div>
    </div>
</a>
