@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-tovar-page.head :h1="$product['title']"></x-tovar-page.head>

    <x-breadcrumbs :tovar="$product" :category="$category"></x-breadcrumbs>

    <section class="product_page_section">
        <div class="_container">
            <div class="tovarinfo">
                <div class="tovarinfo__side">
                    <swiper
                        :slides-per-view="1"
                        :pagination="{
                            clickable: true,
                          }"
                        :modules="modules"
                    >
                        <swiper-slide><img src="{{$product->img}}" alt="{{$product->title}}"></swiper-slide>
                        <swiper-slide><img src="{{$product->img}}" alt="{{$product->title}}"></swiper-slide>

                  </swiper>
                </div>

                <div class="tovarinfo__side">
                    <div class="tovar_description text_styles">
                        {!! $product->description !!}
                    </div>

                    <div class="param">
                        @foreach ( $product->props as $key => $item)
                            <div class="param__element">
                                <div class="icon">

                                </div>

                                <div class="text">
                                    <span>{{$key}}</span>
                                    <span>{{$item}}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
