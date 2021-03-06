@extends('_layouts.main')

@section('body')
    <h1>My Blog</h1>
    <div class="mt-10 pt-12 pb-10 border-t border-solid border-gray-200 grid grid-cols-3 gap-2">
        <div class="col-span-2">
            {{-- Filter posts by category --}}
            @php
            $results = ($page->seo_link) ? $posts->where('category', $page->seo_link) : $posts;
            @endphp
            {{-- Output the blog posts --}}
            @foreach ($results as $post)
                <div class="pt-6 pr-10 pb-16 mb-4 relative text-gray-500">
                    <a href="{{ $post->getPath() }}">
                        <img alt="" title="" src="">
                    </a>
                    <h2 class="my-2 ml-40 text-xl">
                        <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                    </h2>
                    <div class="float-left text-right border-r border-solid border-gray-100 pr-4 ml-2.5 text-xs italic font-serif">
                        <p class="leading-5">
                            <time datetime="{{ date(DATE_ATOM, $post->published) }}">{{ date('j. F Y', $post->published) }}</time>
                            <br />
                            in <a href="{{ $post->category }}" class="text-gray-400">{{ $post->category }}</a>
                            <br />
                            by {{ $post->author }}
                        </p>
                    </div>
                    <div class="float-right text-xs">
                        {{ $post->short_intro }}
                    </div>
                    <a href="{{ $post->getPath() }}" class="px-4 py-2 mt-5 ml-40 inline-block rounded bg-gray-800 text-white italic hover:bg-primary text-xs clear-both">Read more</a>
                </div>
            @endforeach
        </div>
        <aside>
            <div>
                @yield('content')
            </div>
            <div>
                <h3>Blog Categories</h3>
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ $category->getPath() }}" title="{{ $category->title }}">{{ $category->title }} ({{ $posts->where('category', $category->seo_link)->count() }})</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
@endsection