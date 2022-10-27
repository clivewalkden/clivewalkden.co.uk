@php
use Carbon\CarbonInterval;
@endphp

@extends('_layouts.main')

@section('body')

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
        <!-- Breadcrumbs -->
        @include('_partials.breadcrumbs', ['links' => [1 => ['title' => 'Recipes', 'link' => '/recipes/']]])

        <!--Title-->
        <div class="text-center">
            <div class="flex">
                <h1 class="font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none flex-grow text-center">{{ $page->title }}</h1>
            </div>
        </div>

        <div class="grid gap-10 lg:grid-cols-3 mx-auto px-4 py-16 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-18 lg:px-8 lg:py-16">
            <div class="items-center lg:col-span-2">
                <figure>
                    {!! $page->image("/assets/images/recipes/" . $page->image_main, 760, 300, ['alt' => $page->meta_title, 'class' => 'object-cover w-full h-60 md:h-80 xl:h-96', 'resize' => true]) !!}
                </figure>
            </div>
            <div class="mt-2">
                <div class="grid grid-cols-2 shadow-md mb-4 py-3 px-4">
                    <div class="flex">
                        <i class="bx bx-sm bx-time mr-4"></i>
                        <span>Time</span>
                    </div>
                    <div>{{ CarbonInterval::make($page->totalTime)->forHumans() }}</div>
                </div>
                <div class="grid grid-cols-2 shadow-md mb-4 py-3 px-4">
                    <div class="flex">
                        <i class="bx bx-sm bx-line-chart mr-4"></i>
                        <span>Difficulty</span>
                    </div>
                    <div class="flex">
                        @for ($i = 0; $i < $page->difficulty; $i++)
                            <i class="bx bx-sm bxs-star text-primary"></i>
                        @endfor
                    </div>
                </div>
                <div class="grid grid-cols-2 shadow-md mb-4 py-3 px-4">
                    <div class="flex">
                        <i class="bx bx-sm bx-group mr-4"></i>
                        <span>Servings</span>
                    </div>
                    <div>{{ $page->servings }}</div>
                </div>
            </div>
        </div>

        @if ($page->ingredients)
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-18 lg:px-8 lg:py-16">
                <h2 class="mb-4 font-sans md:text-3xl font-bold tracking-tight text-gray-900 text-4xl leading-none">
                    Ingredients</h2>
                <dl class="mt-0 mb-4">
                    @foreach ($page->ingredient_output() as $ingredient)
                        <div class="grid grid-cols-9 mb-4">
                            <dt class="lg:col-span-1 md:col-span-2 col-span-3 text-sm font-medium bg-primary py-3 md:px-2 text-center shadow-md px-4">{{ $ingredient['amount'] }}</dt>
                            <dd class="text-sm text-gray-900 lg:col-span-8 md:col-span-7 col-span-6 mt-0 py-3 md:px-2 shadow-md px-4">{{ $ingredient['ingredient'] }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        @endif

        @if ($page->method)
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-18 lg:px-8 lg:py-16">
                <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    Method</h2>
                <ol class="recipe-methods ml-4">
                    @php $i = 0; @endphp
                    @foreach ($page->methods_output() as $method)
                        @php $i++ @endphp
                        <li class="block ml-6 my-2 py-1 pl-4 leading-8 shadow-md relative"><a
                                    id="step{{ $i }}"></a>{{ $method }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
        @yield("content")

        <!-- Rich Snippets -->
        @include('_partials.seo-blog', ['page' => $page])

@endsection