<?php
use Carbon\Carbon;
?>
@extends('_layouts.main')

@section('body')
    @php
        $start = Carbon::parse($page->launched)->format('F Y');
        $end = ($page->finished) ? Carbon::parse($page->finished)->format('F Y') : 'present';
    @endphp
    <div>
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl px-4 md:px-24 lg:px-8">
            <div class="flex items-center">
                <div class="flex-1">
                    <h1 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">{{ $page->title }}</h1>
                </div>
                <div class="flex-1 mt-8 bg-cover bg-no-repeat h-64 bg-top-9 border-l border-r border-t border-white rounded-t-lg shadow-md"
                     style="background-image: url('/assets/images/portfolio/{{ $page->image_main }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1376 80"
                         class="text-white border-b fill-current border-soft rounded-tl-md rounded-tr-md">
                        <g data-name="TOP BAR">
                            <rect class="text-white fill-current" width="1376" height="80"></rect>
                        </g>
                        <g id="e4be1403-7313-4ecc-a32c-26c731d8a560" data-name="BUTTONS">
                            <circle class="text-red-400 fill-current" cx="37" cy="40" r="11"></circle>
                            <circle class="text-yellow-400 fill-current" cx="71" cy="40" r="11"></circle>
                            <circle class="text-green-400 fill-current" cx="105" cy="40" r="11"></circle>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-yellow-400">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid grid-cols-2 gap-x-24">
                <div class="content">
                    <h3 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                        Description</h3>
                    @yield('content')
                    @if(!$page->finished)
                        <a class="px-4 py-2 my-5 inline-block rounded bg-gray-800 text-white italic hover:bg-primary"
                           href="{{ $page->url }}" target="_blank" title="Launch {{ $page->title }}">
                            View site
                        </a>
                    @endif
                </div>
                <div class="w-full grid grid-cols-2 gap-8">
                    <div>
                        <h4 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Client</h4>
                        {{ $page->client }}
                    </div>
                    <div>
                        <h4 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Year</h4>
                        {{ $start }} - {{ $end }}
                    </div>
                    <div>
                        <h4 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Site Status</h4>
                        {{ $page->status }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid grid-cols-6 gap-2">
                <div class="col-span-2">
                    <h3 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                        Technology stack</h3>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($page->technologies as $technology)
                            <div>{{ $technology }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="col-span-4">
                    <h4 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                        Infrastructure</h4>
                    <div class="grid grid-cols-4 gap-4">
                        @foreach($page->infrastructure as $infra)
                            <div>{{ $infra }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <hr/>

        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <h3 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                Summary</h3>
        </div>
    </div>

    @include('_partials.portfolio-segment', ['block_title' => 'More Work'])

@endsection