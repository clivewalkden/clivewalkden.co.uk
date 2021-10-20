@php
    $sites = $portfolio->take(3);
@endphp
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

    @includeWhen($block_title, '_partials.title', ['block_title' => $block_title])

    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($sites as $site)
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <a href="{{ $site->getPath() }}" aria-label="Article" title="{{ $site->meta_title }}" class="inline-block transition-colors duration-200 hover:text-yellow-400">
                <img src="/assets/images/portfolio/{{ $site->image_main }}" class="object-cover w-full h-64" alt="" />
            </a>
            <div class="p-5 border border-t-0">
                <a href="{{ $site->getPath() }}" aria-label="Article" title="{{ $site->meta_title }}" class="inline-block mb-3 font-sans text-xl font-bold tracking-tight sm:text-2xl sm:leading-none text-title transition-colors duration-200 hover:text-yellow-400">
                    {{ $site->client }}
                </a>
                <p class="mb-5 text-gray-700">
                    {{ $site->intro }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>