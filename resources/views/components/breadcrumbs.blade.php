<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" >
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>


            @if (Request::route()->named('category'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Каталог" itemprop="item" href="{{route("catalog")}}">
                        <span itemprop="name">Каталог</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>
                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{$category['name']}}" itemprop="item">
                        <span itemprop="name">{{$category['name']}}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route()->named('effect_page'))
                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все эффекты" itemprop="item" href="{{route("visual-effect")}}">
                        <span itemprop="name">Все эффекты</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{$effect['name']}}" itemprop="item">
                        <span itemprop="name">{{$effect['name']}}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route()->named('project_page'))
                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все проекты" itemprop="item" href="{{route("projects")}}">
                        <span itemprop="name">Все проекты</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{$project['name']}}" itemprop="item">
                        <span itemprop="name">{{$project['name']}}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route()->named('product'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{$category->name}}" itemprop="item" href="{{route('category', $category->slug)}}">
                        <span itemprop="name">{{$category->name}}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{$tovar['title']}}" itemprop="item">
                        <span itemprop="name">{{$tovar['title']}}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (isset($title))
                <span class="sep"> / </span>
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                        <span title="{{ $title }}" itemprop="item">
                            <span itemprop="name">{{ $title }}</span>
                            <meta itemprop="position" content="1">
                        </span>
                    </span>
            @endif

         </div>
    </div>
</div>
