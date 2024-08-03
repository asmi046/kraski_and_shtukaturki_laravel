<dib class="project_card">
    <div class="photo">
        <img src="{{ $item->img }}" alt="{{ $item->title }}">
    </div>
    <h2 class="card-title">{{ $item->title }}</h2>
    <a class="more_info" href="{{ route('project_page', $item->slug) }}">Подробнее...</a>
</dib>
