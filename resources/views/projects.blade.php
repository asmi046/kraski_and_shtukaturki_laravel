@extends('layouts.all')

@php
    $title = "Выполненные проекты";
    $description = "Проекты выполненные нашей компание. Подбор покрытия, колеровка, нанесение";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-head-page :h1="$title"></x-head-page>
    <x-breadcrumbs :title="$title"></x-breadcrumbs>


    <section class="project_page_section">
        <div class="_container">
        <h2>Известковая декоративная штукатурка от San Marco - Интонакино Минерале (квартира в Москве)</h2>
        <div class="_project_container">
            <swiper
                :effect="'coverflow'"
                :grab-cursor="true"
                :centered-slides="true"
                :slides-per-view="'auto'"
                :initial-slide="2"
                :coverflow-effect="{
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
                }"
                :pagination="true"
                :modules="modules"
                class="mySwiper"
            >
                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_1.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_2.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_3.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_4.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_5.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_6.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_1/p1_7.jpg')}}" />
                </swiper-slide>

            </swiper>
        </div>

        <h2>Антика Кальче+ с Велатурой и патиной "Хамелеон" (квартира в Москве)</h2>
        <div class="_project_container">
            <swiper
                :effect="'coverflow'"
                :grab-cursor="true"
                :centered-slides="true"
                :slides-per-view="'auto'"
                :initial-slide="2"
                :coverflow-effect="{
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
                }"
                :pagination="true"
                :modules="modules"
                class="mySwiper"
            >
                <swiper-slide>
                    <img src="{{asset('portfolio/project_2/p2_1.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_2/p2_2.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_2/p2_3.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_2/p2_4.jpg')}}" />
                </swiper-slide>

            </swiper>
        </div>

        <h2>Декоративное покрытие Оптима (дом в Курске)</h2>
        <div class="_project_container">
            <swiper
                :effect="'coverflow'"
                :grab-cursor="true"
                :centered-slides="true"
                :slides-per-view="'auto'"
                :initial-slide="2"
                :coverflow-effect="{
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
                }"
                :pagination="true"
                :modules="modules"
                class="mySwiper"
            >
                <swiper-slide>
                    <img src="{{asset('portfolio/project_3/p3_1.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_3/p3_2.jpg')}}" />
                </swiper-slide>


            </swiper>
        </div>
        <h2>Интонакино Минерале + Велатура (квартира в Курске)</h2>
        <div class="_project_container">
            <swiper
                :effect="'coverflow'"
                :grab-cursor="true"
                :centered-slides="true"
                :slides-per-view="'auto'"
                :initial-slide="2"
                :coverflow-effect="{
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
                }"
                :pagination="true"
                :modules="modules"
                class="mySwiper"
            >
                <swiper-slide>
                    <img src="{{asset('portfolio/project_4/p4_1.jpg')}}" />
                </swiper-slide>

                <swiper-slide>
                    <img src="{{asset('portfolio/project_4/p4_2.jpg')}}" />
                </swiper-slide>


            </swiper>
        </div>

        </div>
    </section>
@endsection
