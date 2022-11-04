---
extends: _layouts.main
meta_title: Frequently used Recipes
meta_description: Some recipes I like to keep to hand when the time suits me.
---

@section('body')
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-screen-sm sm:text-center sm:mx-auto">
            <h1 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Recipes
            </h1>
            <p class="text-base text-gray-700 md:text-lg sm:px-4">
                Some recipes I like to keep to hand when the time suits me.
            </p>
            @include('_partials.hr')
        </div>
        <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-3 sm:row-gap-6 sm:grid-cols-2">
            @foreach ($recipes as $recipe)
                <a href="{{ $recipe->getPath() }}/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                        {!! $page->image("/assets/images/recipes/". $recipe->image_main, 400, 250, ['alt' => $recipe->meta_title, 'class' => 'object-cover w-full h-42 md:h-56 xl:h-64', 'resize' => true]) !!}
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <p class="mb-4 text-lg font-bold text-gray-100">{{ $recipe->title }}</p>
                            <p class="text-sm tracking-wide text-gray-300">
                                {{ $recipe->intro }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection