<?php
use Carbon\Carbon;
?>
@extends('_layouts.main')

@section('body')
    @php
        $date_format = 'F Y';
        $start = Carbon::parse($page->launched)->format($date_format);
        $last_update = Carbon::parse($page->lastupdate)->format($date_format);
        $end = ($page->finished) ? Carbon::parse($page->finished)->format($date_format) : 'present';
    @endphp
    <div>
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl px-4 md:px-24 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <div class="mt-16 md:mt-0 text-center md:text-left">
                    <h1 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">{{ $page->title }}</h1>
                </div>
                <div class="mt-2 md:mt-8 bg-contain bg-no-repeat h-40 md:h-64 bg-top-9 border-l border-r border-t border-white rounded-t-lg shadow-md"
                     style="background-image: url('/assets/images/portfolio/{{ $page->image_small ?? $page->image_main }}')">
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
        <div class="px-4 py-6 md:pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-24">
                <div class="content">
                    <h3 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                        Description</h3>
                    {{ $page->intro }}
                    <br/>
                    @if($page->url)
                        <a class="px-4 py-2 my-5 inline-block rounded bg-secondary text-white italic hover:bg-gray-500"
                           href="{{ $page->url }}" target="_blank" title="{{ $page->title }} code / repository">
                            View module
                        </a>
                    @endif
                    @if($page->docs)
                        <a class="px-4 py-2 my-5 inline-block rounded bg-secondary text-white italic hover:bg-gray-500"
                           href="{{ $page->docs }}" target="_blank" title="{{ $page->title }} documentation">
                            View docs
                        </a>
                    @endif
                    @if($page->issues)
                        <a class="px-4 py-2 my-5 inline-block rounded bg-secondary text-white italic hover:bg-gray-500"
                           href="{{ $page->issues }}" target="_blank" title="{{ $page->title }} issue tracker">
                            View issues
                        </a>
                    @endif

                    <h3 class="mb-5 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                        Summary</h3>
                    @yield('summary')
                </div>
                <div class="w-full grid grid-cols-2 gap-x-8 gap-y-0">
                    @if($page->github_user && $page->github_repo)
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Latest Version</h4>
                    </div>
                    <div>
                        <a href="{{ $page->url }}" target="_blank" rel="external">
                            <img src="https://img.shields.io/github/v/tag/{{ $page->github_user }}/{{ $page->github_repo }}?style={{ $page->badge_style }}&color=blue&logo=github&logoColor=white"/>
                        </a>
                    </div>
                    @endif
                    @if($page->packagist_user && $page->packagist_repo)
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Downloads</h4>
                    </div>
                    <div>
                        <a href="{{ $page->url }}" target="_blank" rel="external">
                            <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/{{ $page->packagist_user }}/{{ $page->packagist_repo }}?style={{ $page->badge_style }}&color=blue&logo=packagist&logoColor=white">
                        </a>
                    </div>
                    @endif
                    @if($page->packagist_user && $page->packagist_repo)
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Stars</h4>
                    </div>
                    <div>
                        <a href="{{ $page->url }}" target="_blank" rel="external">
                            <img alt="Packagist Downloads" src="https://img.shields.io/packagist/stars/{{ $page->packagist_user }}/{{ $page->packagist_repo }}?style={{ $page->badge_style }}&color=blue&logo=packagist&logoColor=white">
                        </a>
                    </div>
                    @endif
                    @if($page->github_user && $page->github_repo)
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            License</h4>
                    </div>
                    <div>
                        <a href="{{ $page->url }}" target="_blank" rel="external">
                            <img src="https://img.shields.io/github/license/{{ $page->github_user }}/{{ $page->github_repo }}?style={{ $page->badge_style }}&color=blue&logo=github&logoColor=white"/>
                        </a>
                    </div>
                    @endif
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Launched</h4>
                    </div>
                    <div>
                        <a href="{{ $page->url }}" target="_blank" rel="external">
                            <img src="https://img.shields.io/badge/launched-{{ $start }}-blue?style={{ $page->badge_style }}&color=blue&logo=github&logoColor=white"/>
                        </a>
                    </div>
                    @if($page->github_user && $page->github_repo)
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm:leading-none">
                            Last Update</h4>
                    </div>
                    <div>
                        <a href="{{ $page->url }}" target="_blank" rel="external">
                            <img src="https://img.shields.io/github/last-commit/{{ $page->github_user }}/{{ $page->github_repo }}?style={{ $page->badge_style }}&color=blue&logo=github&logoColor=white"/>
                        </a>
                    </div>
                    @endif
                    <div>
                        <h4 class="mb-2 font-sans text-xl font-bold tracking-tight text-gray-900 sm:text-l sm-leading-none">
                            Works with
                        </h4>
                    </div>
                    <div>
                        @foreach($page->supported_versions as $version)
                            <div>{{ $version }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('_partials.portfolio-segment', ['block_title' => 'More Work'])

@endsection