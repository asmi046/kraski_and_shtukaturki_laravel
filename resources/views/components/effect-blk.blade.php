<a href="#" @class([
    'services__card',
    'card-services'
])
@style([
    'background-image:url('.$item->img.')'
])
>
    <div class="card-services__descp">
        <h3 class="card-services__title">{!!$item->name!!}</h3>
    </div>
</a>
