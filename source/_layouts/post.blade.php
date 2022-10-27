@extends('_layouts.main')

@section('body')
    @php
        $category = $categories->where('seo_link', $page->category)->first();
        $updated = (bool)$page->first_published;
    @endphp
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <!-- Breadcrumbs -->
        @include('_partials.breadcrumbs', ['links' => [1 => ['title' => 'Blog', 'link' => '/blog/'], 2 => ['title' => $category->title, 'link' => $category->getPath().'/']]])

        <!--Title-->
        <div class="text-center">
            <p class="text-sm md:text-base text-yellow-500 font-bold">
                @if ($updated)
                    Originally Posted:
                    <time datetime="{{ date('Y-m-d\TH:i:sP', $page->first_published) }}">{{ date('j F Y', $page->first_published) }}</time>
                    <span class="text-gray-900">/</span>
                    Last Updated:
                @endif
                <time datetime="{{ date('Y-m-d\TH:i:sP', $page->published) }}">{{ date('j F Y', $page->published) }}</time>
                <span class="text-gray-900">/</span> <a href="{{ $category->getPath() }}/">{{ $category->title }}</a>
            </p>
            <div class="flex">
                @if ($page->getPrevious())
                    <a href="{{ $page->getPrevious()->getPath() }}/" title="{{ $page->getPrevious()->title }}"
                       class="flex-none text-sm self-center">Previous Article</a>
                @endif
                <h1 class="font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none flex-grow text-center">{{ $page->title }}</h1>
                @if ($page->getNext())
                    <a href="{{ $page->getNext()->getPath() }}/" title="{{ $page->getNext()->title }}"
                       class="flex-none text-sm self-center">Next Article</a>
                @endif
            </div>
        </div>

        <!--image-->
        @if ($page->hero)
            <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-12 rounded bg-center"
                 style="background-image:url('/assets/images/blog/articles/{{ $page->hero }}'); height: 75vh;"></div>
        @else
            <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-12 rounded bg-center"
                 style="background-image:url('/assets/images/blog/categories/{{ $category->seo_link }}.jpg'); height: 75vh;"></div>
        @endif

        <!--Container-->
        <div class="container max-w-5xl mx-auto -mt-32">

            <div class="mx-0 sm:mx-6">

                <div class="bg-white w-full p-8 md:p-24 text-lg text-gray-700 content">
                    <!--Post Content-->
                    @yield('content')
                    <!--/ Post Content-->
                </div>

                <!--Author-->
                <div class="flex w-full items-center font-sans p-8 md:p-24">
                    <img class="w-10 h-10 rounded-full mr-4" src="/assets/images/clive-walkden.jpg"
                         alt="Avatar of Clive Walkden">
                    <div class="flex-1">
                        <p class="text-base font-bold text-base md:text-xl leading-none">Clive Walkden</p>
                    </div>
                </div>
                <!--/Author-->
            </div>
        </div>

        <!-- Rich Snippets -->
        @include('_partials.seo-blog', ['page' => $page, 'category' => $category])

        {{-- Latest Articles --}}
        @include('_partials.blog-segment', ['block_title' => 'Latest Articles'])
    </div>
@endsection