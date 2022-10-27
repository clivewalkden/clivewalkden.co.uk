<nav class="flex px-4 py-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <i class="bx bx-sm bxs-home text-primary mr-4"></i>
                Home
            </a>
        </li>
        @if ($links)
            @foreach ($links as $link)
            <li>
                <div class="flex items-center">
                    <i class="bx bx-chevron-right text-primary"></i>
                    <a href="{{ $link['link'] }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $link['title'] }}</a>
                </div>
            </li>
            @endforeach
        @endif
        <li aria-current="page">
            <div class="flex items-center">
                <i class="bx bx-chevron-right text-primary"></i>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $page->title }}</span>
            </div>
        </li>
    </ol>
</nav>