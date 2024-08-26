<div class="blog_card">
    <a class="img_wripper" href="{{ route('blog_page', $item->slug) }}">
        <img src="{{ $item->img }}" alt="{{ $item->title }}">
    </a>
    <div class="text">
        <h2>{{ $item->title }}</h2>
        <p class="date">{{date("d.m.Y", strtotime($item->created_at))}}</p>

        <p class="quote">{{ mb_strimwidth(strip_tags($item->text), 0, 160, "..."); }}</p>

        <a href="{{ route('blog_page', $item->slug) }}" class="consult__form-btn btn">Читать статью</a>
    </div>
</div>
