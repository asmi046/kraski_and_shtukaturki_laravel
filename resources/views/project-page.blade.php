@extends('layouts.all')

@php
    $title = (!empty($project['seo_title']))?$project['seo_title']:$project['project'];
    $description = (!empty($project['seo_description']))?$project['seo_description']:$project['project'];;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-head-page :h1="'Проект: '.$title"></x-head-page>
    <x-breadcrumbs :project="$title"></x-breadcrumbs>


    <section class="project_page_section">
        <div class="_container">
            <div class="project_card tovarinfo">
                <div class="tovarinfo__side">
                    <swiper
                        :slides-per-view="1"
                        :pagination="{
                            clickable: true,
                        }"
                        :modules="modules"
                    >

                        @foreach ($project->galery as $item)
                            <swiper-slide>
                                <a data-fslightbox="prod_g1" href="{{$item['img']}}">
                                    <img src="{{$item['img']}}" alt="{{$item['title']}}">
                                </a>
                            </swiper-slide>
                        @endforeach

                    </swiper>

                </div>

                <div class="tovarinfo__side">
                    <div class="cerecters">
                        @foreach ($project->params as $item)
                            <div class="cer">
                                <span class="name">{{ $item['name'] }}</span>
                                <span class="dots"></span>
                                <span class="value">{{ $item['value'] }}</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="description text_styles">
                        <h3>Описание проекта:</h3>
                        {!! $project['description'] !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
