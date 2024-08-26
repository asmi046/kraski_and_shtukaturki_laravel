@extends('layouts.all')

@php
    $title = (!empty($page['seo_title']))?$page['seo_title']:$page['title'];
    $description = (!empty($page['seo_description']))?$page['seo_description']:$page['title'];;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-tovar-page.head :h1="$title"></x-tovar-page.head>

    <x-breadcrumbs :blog="$page"></x-breadcrumbs>

    <section class="blog_text_section text_styles">
        <div class="_container">
            <img class="blog_page_img" src="{{ $page->img }}" alt="{{ $page->title }}">
            <p clasS="blog_page_date">{{date("d.m.Y", strtotime($page->created_at))}}</p>
            {!!  $page->text !!}
        </div>
    </section>

    <x-consultation-mini></x-consultation-mini>

@endsection
