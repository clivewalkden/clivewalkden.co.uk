---
extends: _layouts.main
meta_title: About Me | Clive Walkden
meta_description: I'm a 31 year old PHP developer from the UK. My skills lie in website development using PHP, MySQL, HTML5, CSS3 and jQuery.
---
@section('body')
    @php
        $age = \Carbon\Carbon::parse('23rd June 1981')->diffInYears();
    @endphp
    <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-screen-sm sm:text-center sm:mx-auto">
            <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Passionate about Cloud technologies
            </h2>
            <p class="text-base text-gray-700 md:text-lg sm:px-4">
                <a href="https://u.magento.com/certification/directory/dev/744392/" target="_blank" class="text-gray-300 block float-right ml-4">
                    <img src="/assets/images/middle_frontend_developer.png" alt="" title="">
                </a>
                I'm a {{ $age }} year old PHP developer from the UK. My skills lie in website development using <a href="/blog/php/" class="text-primary">PHP</a>, MySQL, <a href="/blog/html5/" class="text-primary">HTML5</a>, <a href="/blog/css/" class="text-primary">CSS3</a> and <a href="/blog/jquery/" class="text-primary">jQuery</a>. Having co-run my own design agency and seeing the major advances in the internet I thought I’d contribute a little of my knowledge to the community in general.
            </p>
            <hr class="w-full my-8 border-gray-300" />
        </div>
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="lg:pr-10">
                <h5 class="mb-4 text-4xl font-extrabold leading-none">
                    Other Interests
                </h5>
                <p class="mb-6 text-gray-900">
                    Another passion of mine is PC gaming, having grown up with an Amiga, i moved to the PC in 1999 and have enjoyed many different genres of gaming. RPG (Role Playing Games) are my favourite at the moment with Elder Scrolls IV: Skyrim taking up many hours.
                </p>
                <p class="mb-6 text-gray-900">
                    As well as a web developer I am one of the founders of UberThemes which specialised in PHP Nuke Themes for Gamers, UberRC which manufacturers parts for RC (Remote Control) cars, mainly HPI, Traxxas and Losi.
                </p>
                <p class="mb-6 text-gray-900">
                    I hope you enjoy the site and find it useful.
                </p>
                <hr class="mb-5 border-primary" />
                <div class="flex items-center space-x-4">
                    @foreach ($page->social as $sm)
                        @include('_partials.social', $sm)
                    @endforeach
                </div>
            </div>
            <div>
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="/assets/images/clive-walkden.jpg" alt="" />
            </div>
        </div>
    </div>

    @include('_partials.experience-segment', ['block_title' => 'Experience'])

@endsection
