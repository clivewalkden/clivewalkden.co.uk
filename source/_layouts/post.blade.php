@extends('_layouts.main')

@section('body')
    <div class="flex mb-8">
        @if ($page->getPrevious())
            <a href="{{ $page->getPrevious()->getPath() }}" title="{{ $page->getPrevious()->title }}" class="flex-none text-sm self-center">Previous Project</a>
        @endif
        <h1 class="flex-grow font-serif text-3xl font-normal text-center">{{ $page->title }}</h1>
        @if ($page->getNext())
            <a href="{{ $page->getNext()->getPath() }}" title="{{ $page->getPrevious()->title }}" class="flex-none text-sm self-center">Next Project</a>
        @endif
    </div>
    <div class="mt-10 pt-12 pb-10 border-t border-solid border-gray-200 grid grid-cols-3 gap-2">
        <div class="col-span-2">
            {{-- Output the blog posts --}}
            <div class="pt-6 pr-10 pb-16 mb-4 relative text-gray-500">
                <img alt="" title="" src="">
                <div class="float-right text-xs">
                    @yield('content')
                </div>

                <div class="float-left text-right border-r border-solid border-gray-100 pr-4 ml-2.5 text-xs italic font-serif">
                    <p class="leading-5">
                        @php
                        $category = $categories->where('seo_link', $page->category);
                        @endphp
                        Posted: <time datetime="{{ date(DATE_ATOM, $page->published) }}">{{ date('j. F Y', $page->published) }}</time>
                        in <a href="{{ $category->getPath() }}" class="text-gray-400">{{ $page->category }}</a>
                        by {{ $page->author }}
                    </p>
                </div>
            </div>
        </div>
        <aside>
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