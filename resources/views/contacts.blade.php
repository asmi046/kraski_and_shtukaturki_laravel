@extends('layouts.all')

@php
    $title = "Контактная информация";
    $description = "Свяжитесь с нами любым удобным для Вас способом и наши специалисты ответят на все интересующие Вас вопросы";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-head-page h1="Контакты"></x-head-page>
    <x-breadcrumbs :title="$title"></x-breadcrumbs>

    <section class="contact_page_section">
        <div itemscope itemtype="http://schema.org/Organization" class="_container">

            <h2 itemprop="name" style="display: none">Краски и Штукатурки - декоративные покрытия и венецианские штукатурки в Курске</h2>

            <div style="display: none" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">ул. Мирная 27а</span>
                <span itemprop="postalCode">305004</span>
                <span itemprop="addressLocality">Курск</span>
            </div>

            <a  itemprop="telephone" href="tel:+7{{phone_format($options['phone'])}}" class="phone_in_pzge">{{$options['phone']}}</a>
            <br>
            <a itemprop="telephone" href="tel:+7{{phone_format($options['phone_2'])}}" class="phone_in_pzge">{{$options['phone_2']}}</a>

            <p><strong>e-mail:</strong> <span itemprop="email">{{$options['email']}}</span></p>
            <p><strong>Адрес:</strong> {{$options['adress']}}</p>

            <yandex-map coordinate="{{$options['office_coordinate']}}" adress="<b>Краски-и-Штукатурки.рф.ru</b><br>{{$options['adress']}}"></yandex-map>
        </div>
    </section>


@endsection
