---
permalink: 404.html
---

@extends('_layouts.main')

@section('body')
    <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="row">
            <div class="col-xs-12 p-xs-y-8 text-center">
                <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    Something went wrong...
                </h2>
                <h4 class="m-xs-y-2 mb-14">
                    We couldn't find the page you were looking for.
                    {{ $page->getPath() }}
                </h4>
                <p class="text-base text-gray-700 md:text-lg sm:px-4 lg:pb-12">
                    Have you tried the <a href="/">Home page</a>, <a href="/portfolio/">Portfolio</a>,
                    <a href="/blog/">Blog</a> or <a href="/about/">About</a> pages.
                </p>
            </div>
        </div>
    </div>
@endsection