<nav class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0 justify-end" id="nav-content">
    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
        <li class="mr-3">
            <a href="/" class="{{ $page->selected('') }}">Home</a>
        </li>
        <li class="mr-3">
            <a href="/portfolio/" class="{{ $page->selected('portfolio') }}">Portfolio</a>
        </li>
        <li class="fmr-3">
            <a href="/blog/" class="{{ $page->selected('blog') }}">Blog</a>
        </li>
        <li class="mr-3">
            <a href="/about/" class="{{ $page->selected('about') }}">About</a>
        </li>
    </ul>
</nav>