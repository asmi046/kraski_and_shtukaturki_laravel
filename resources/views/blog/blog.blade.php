@extends('layouts.all')

@php
    $title = "Статьи и полезные материалы";
    $description = "Статьи и полезные материалы о нанесении декоративных покрытий и ремонте";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-head-page :h1="$title"></x-head-page>
    <x-breadcrumbs :title="$title"></x-breadcrumbs>


    <section class="project_page_section">
        <div class="_container">
            <div class="projects_wrapper">
                @foreach ($blog as $item)
                    <x-blog.card :item="$item"></x-blog.card>
                @endforeach
            </div>
        </div>

        </div>
    </section>
@endsection
