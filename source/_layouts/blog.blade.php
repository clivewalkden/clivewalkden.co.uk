@extends('_layouts.main')

@section('body')

    {{-- Filter posts by category --}}
    @php
        $results = ($page->seo_link) ? $posts->where('category', $page->seo_link) : $posts;
        $category = ($page->seo_link) ? $categories->where('seo_link', $page->seo_link) : false;
    @endphp

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col lg:flex-row">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <h1 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    My Blog Articles<br class="hidden md:block" />
                    Things you may find useful
                    <span class="inline-block text-yellow-400">or not</span>
                </h1>
            </div>
            <div class="lg:w-1/2">
                <p class="text-base text-gray-700">
                    @if ($category)
                        @yield('content')
                    @else
                        These articles below are a collection of things I've either found useful, felt were worth sharing, or needed to get out of my head. Please don't judge too harshly, many of these weren't meant for others' eyes.
                    @endif
                </p>
            </div>
        </div>
        @include('_partials.hr')
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 row-gap-8 lg:grid-cols-5">
            <div class="flex flex-col space-y-8 lg:col-span-4">
                @if ($results->count())
                    @foreach ($results as $post)
                        @php
                        $date = ($post->updated_at) ? $post->updated_at : $post->published;
                        @endphp
                    <div class="mb-2 pb-10 border-b">
                        <time datetime="{{ date(DATE_ATOM, $date) }}" class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
                            {{ date('j. F Y', $date) }}
                        </time>
                        <div class="mb-3">
                            <a href="{{ $post->getPath() }}/" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-400">
                                <p class="font-sans text-xl font-extrabold leading-none tracking-tight lg:text-2xl">
                                    {{ $post->title }}
                                </p>
                            </a>
                        </div>
                        <p class="mb-4 text-base text-gray-700 md:text-lg">
                            {{ $post->short_intro }}
                        </p>
                        @include('_partials.author', ['author_name' => 'Clive Walkden', 'author_url' => '/about/', 'author_image' => 'clive-walkden.jpg'])
                    </div>
                    @endforeach
                @else
                    <div class="mb-2 pb-10 border-b">
                        <p>There are currently no articles in this category. Instead, maybe see if there is something in our latest articles that interests you.</p>
                        {{-- Latest Articles --}}
                        @include('_partials.blog-segment', ['block_title' => 'Latest Articles'])
                    </div>
                @endif
            </div>
            <div class="lg:col-span-1">
                <div>
                    <h3 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">Blog Categories</h3>
                    <div class="max-w-lg space-y-3 sm:mx-auto lg:max-w-xl">
                        @foreach ($categories as $category)
                            @php
                            $count = $posts->where('category', $category->seo_link)->count()
                            @endphp
                            @unless($count == 0)
                        <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                            <a href="{{ $category->getPath() }}/" title="{{ $category->title }}" class="text-gray-800">
                                {{ $category->title }} ({{ $count }})
                            </a>
                        </div>
                            @endunless
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection