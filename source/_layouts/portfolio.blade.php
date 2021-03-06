@extends('_layouts.main')

@section('body')
    <div class="flex mb-8">
        @if ($page->getPrevious())
        <a href="{{ $page->getPrevious()->getPath() }}" title="{{ $page->getPrevious()->title }}" class="flex-none text-sm self-center">Previous Project</a>
        @endif
        <h2 class="flex-grow font-serif text-3xl font-normal text-center">{{ $page->title }}</h2>
        @if ($page->getNext())
        <a href="{{ $page->getNext()->getPath() }}" title="{{ $page->getPrevious()->title }}" class="flex-none text-sm self-center">Next Project</a>
        @endif
    </div>
    <div class="grid grid-cols-3 gap-2">
        <div class="col-span-2">
            <img src="/assets/images/portfolio/{{ $page->image_main }}">
        </div>
        <div class="text-sm">
            @yield('content')

            @if ($page->technologies)
                <h3 class="my-2 text-base font-normal">Technologies Used:</h3>
                <p>
                @php
                echo join($page->technologies,', ')
                @endphp
                </p>
            @endif

            <a class="px-4 py-2 my-5 inline-block rounded bg-gray-800 text-white italic hover:bg-primary" href="{{ $page->url }}" target="_blank" title="Launch {{ $page->title }}">
                Launch {{ $page->title }}
            </a>
        </div>
    </div>
@endsection