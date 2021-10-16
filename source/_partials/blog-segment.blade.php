@php
    $articles = $posts->take(3);
@endphp
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

    <div class="max-w-xl mb-2 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 border-b border-primary">
        <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-title sm:text-4xl sm:leading-none">Latest articles</h2>
    </div>

    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($articles as $post)
            @php
            $category = $categories->where('seo_link', $post->category)->first()
            @endphp
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                    <a href="{{ $category->getPath() }}" class="transition-colors duration-200 text-title hover:text-yellow-700" aria-label="Category" title="traveling">
                        {{ $category->title }}
                    </a>
                    <span class="text-gray-600">— <time datetime="{{ date('Y-m-d\TH:i:sP', $post->published) }}">{{ date('j F Y', $post->published) }}</time></span>
                </p>
                <a href="{{ $post->getPath() }}" aria-label="Article" title="{{ $post->meta_title }}" class="inline-block mb-3 font-sans text-xl font-bold tracking-tight sm:text-2xl sm:leading-none text-title transition-colors duration-200 hover:text-yellow-400">
                    {{ $post->title }}
                </a>
                <p class="mb-5 text-gray-700">
                    {{ $post->short_intro }}
                </p>
                <div class="flex items-center">
                    <a href="/" aria-label="Author" title="Author" class="mr-3">
                        <img src="/assets/images/clive-walkden.jpg" alt="avatar" class="object-cover w-10 h-10 rounded-full shadow-sm" />
                    </a>
                    <div>
                        <a href="/" aria-label="Author" title="Author" class="font-semibold text-gray-800 transition-colors duration-200 hover:text-yellow-400">{{ $post->author }}</a>
                        <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>