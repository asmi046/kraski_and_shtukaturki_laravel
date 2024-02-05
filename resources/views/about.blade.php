@extends('layouts.all')

@php
    $title = "О компании Краски и штукатурки";
    $description = "О компании Краски и штукатурки, крупный дистрибютер брендов San Marco b DECORAZZA в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-category.banner :h1="$title"></x-category.banner>

    <section class="page__categoty-top-sec categoty-top-sec section">
        <div class="_container">
            <h2 style="display: none">Навигация по хлебным крошкам</h2>
            <x-breadcrumbs :title="$title"></x-breadcrumbs>
        </div>
    </section>

    <section class="page__services services section">
        <div class="_container">
            <div class="text_styles">
                <h2>Добро пожаловать на сайт «Краски и Штукатурки»</h2>
                {!! $options["about_main"] !!}

                <h2>Награды и достижения</h2>
                <swiper>
                    <swiper-slide>
                        <a data-fslightbox="prod_g1" href="{{asset('img/diploms/diplom1.jpg')}}">
                            <img src="{{asset('img/diploms/diplom1.jpg')}}" alt="Диплом 1">
                        </a>
                    </swiper-slide>
                    <swiper-slide>
                        <a data-fslightbox="prod_g1" href="{{asset('img/diploms/diplom2.jpg')}}">
                            <img src="{{asset('img/diploms/diplom2.jpg')}}" alt="Диплом 1">
                        </a>
                    </swiper-slide>
                    <swiper-slide>
                        <a data-fslightbox="prod_g1" href="{{asset('img/diploms/diplom3.jpg')}}">
                            <img src="{{asset('img/diploms/diplom3.jpg')}}" alt="Диплом 1">
                        </a>
                    </swiper-slide>


                </swiper>
            </div>
        </div>
    </section>


@endsection
