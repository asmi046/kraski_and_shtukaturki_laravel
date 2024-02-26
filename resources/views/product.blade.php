@extends('layouts.all')

@php
    $title = (!empty($product['seo_title']))?$product['seo_title']:$product['title'];
    $description = (!empty($product['seo_description']))?$product['seo_description']:$product['title'];;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-tovar-page.head :h1="$product['title']"></x-tovar-page.head>

    <x-breadcrumbs :tovar="$product" :category="$category"></x-breadcrumbs>

    <section itemscope="" itemtype="http://schema.org/Product" class="product_page_section">
        <div class="_container">
            <div style="display: none" itemprop="name">{{ $product['title'] }}</div>
            <div class="tovarinfo">
                <div class="tovarinfo__side">
                    <swiper
                        :slides-per-view="1"
                        :pagination="{
                            clickable: true,
                          }"
                        :modules="modules"
                    >
                        <swiper-slide>
                            <a data-fslightbox="prod_g1" href="{{$product->img}}">
                                <img itemprop="image" src="{{$product->img}}" alt="{{$product->title}}">
                            </a>
                        </swiper-slide>

                        @foreach ($product->tovar_images as $item)
                            <swiper-slide>
                                <a data-fslightbox="prod_g1" href="{{$item->link}}">
                                    <img src="{{$item->link}}" alt="{{$item->title}}">
                                </a>
                            </swiper-slide>
                        @endforeach

                    </swiper>
                </div>

                <div class="tovarinfo__side">
                    <div class="tovar_description text_styles">
                        <div itemprop="description">
                            {!! $product->description !!}
                        </div>
                    </div>

                    @if (!empty($product->props))
                        <div class="param">
                            @foreach ( $product->props as $item)
                                <x-tovar-page.tovar-param :key="$item['Параметр']" :item="$item['Величина']"></x-tovar-page.tovar-param>
                            @endforeach
                        </div>
                    @endif


                    <div class="sales__action">

                        <div style="display: none" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <span itemprop="price">{{ $product->tovar_prices[0]->price}}</span>
                            <span itemprop="priceCurrency">RUB</span>
                            <link itemprop="availability" href="http://schema.org/InStock">
                        </div>

                        <page-to-bascet sku="{{$product->sku}}" :prices="{{json_encode($product->tovar_prices)}}"></page-to-bascet>

                    </div>
                </div>


            </div>
        </div>
    </section>

    @if (!empty($textura))
        <section class="product_page_section">
            <div class="_container">
                <h2 class="title">Фактуры для материала</h2>
                <div class="textures">
                    @foreach ($textures as $item)
                        <x-tovar-page.texture :textura="$item"></x-tovar-page.texture>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    <x-consultation-mini></x-consultation-mini>

@endsection
