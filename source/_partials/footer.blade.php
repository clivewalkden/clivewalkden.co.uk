<footer class="py-6 text-white footer">
    <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
        <div class="grid justify-center lg:justify-between">
            <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                <span>Copyright ©2013-2022 Clive Walkden</span>
                <a href="/sitemap.xml">
                    <span>Sitemap</span>
                </a>
            </div>
            <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                @foreach ($page->social as $sm)
                    @include('_partials.social', $sm)
                @endforeach
            </div>
        </div>
    </div>
</footer>