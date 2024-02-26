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
            <div style="display: none" itemprop="name">{{$h1}}</div>
            <div class="tovarinfo">
                <div class="tovarinfo__side">
                    <swiper
                        :slides-per-view="1"
                        :pagination="{
                            clickable: true,
                          }"
                        :modules="modules"
                    >
                        @foreach ($galery as $item)

                                <swiper-slide>
                                    <a data-fslightbox="prod_gp" href="{{$item->link}}">
                                        <img itemprop="image" src="{{$item->link}}" alt="{{$product->title}} рисунок {{$loop->index}}">
                                    </a>
                                </swiper-slide>

                        @endforeach



                    </swiper>
                </div>

                <div class="tovarinfo__side">
                    <div class="tovar_description text_styles">
                        <h3>Краткое описание</h3>
                        <div itemprop="description">
                            {!! $product->short_description !!}
                        </span>
                    </div>

                    <div class="adv_list">
                        <ul>
                            @foreach ( $product->advantages as $item)
                                <li>{{$item['Преимущество']}}</li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="pack_blk">
                        <div class="pack_blk_element">
                            <div class="img_wrap">
                                <img src="{{$product->img}}" alt="Внешний вид упаковки ">
                            </div>

                            <div class="text">
                                <span>Упаковка</span>
                            </div>
                        </div>

                    </div>

                    <div style="display: none" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                        <span itemprop="price">{{ $product->tovar_prices[0]->price}}</span>
                        <span itemprop="priceCurrency">RUB</span>
                        <link itemprop="availability" href="http://schema.org/InStock"> </div>
                    </div>

                    <div class="sales__action">
                        <page-to-bascet sku="{{$product->sku}}" :prices="{{json_encode($product->tovar_prices)}}"></page-to-bascet>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- @if (!empty($all_colors))
        <section class="product_page_section">
            <div class="_container">
                <h2 class="title">Все товары данное серии</h2>
                <div class="textures">
                    @foreach ($all_colors as $item)
                        <x-tovar-page.color :tovar="$item"></x-tovar-page.color>
                    @endforeach
                </div>
            </div>
        </section>
    @endif --}}


    <x-consultation-mini></x-consultation-mini>

@endsection
