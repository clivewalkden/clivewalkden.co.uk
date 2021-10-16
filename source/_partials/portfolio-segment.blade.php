@php
    $sites = $portfolio->take(3);
@endphp
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

    <div class="max-w-xl mb-2 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 border-b border-primary">
        <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-title sm:text-4xl sm:leading-none">Latest work</h2>
    </div>

    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($sites as $site)
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="/assets/images/portfolio/{{ $site->image_main }}" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
                <a href="{{ $site->getPath() }}" aria-label="Article" title="{{ $site->meta_title }}" class="inline-block mb-3 font-sans text-xl font-bold tracking-tight sm:text-2xl sm:leading-none text-title transition-colors duration-200 hover:text-yellow-400">
                    {{ $site->title }}
                </a>
                <p class="mb-5 text-gray-700">
                    {{ $site->intro }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>