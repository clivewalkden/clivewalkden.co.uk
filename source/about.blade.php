---
extends: _layouts.main
meta_title: About Me Clive Walkden
meta_description: I'm a 41 year old Magento 2 developer and DevOps Engineer from the UK. I've been building websites for over 20 years.
---
@section('body')
    @php
        $age = \Carbon\Carbon::parse('23rd June 1981')->diffInYears();
    @endphp
    <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-screen-sm sm:text-center sm:mx-auto">
            <h1 class="mb-4 font-sans text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl sm:leading-none">
                <i class="bx bx-small bx-cloud"></i> Passionate about Cloud Technologies
            </h1>
            <p class="text-base text-gray-700 md:text-lg sm:px-4 lg:pb-12">
                <a href="https://u.magento.com/certification/directory/dev/744392/" target="_blank" class="text-gray-300 block float-right ml-4">
                    {!! $page->image("/assets/images/middle_frontend_developer.png", 64, 114, ['title' => 'Magento Certified Frontend Developer', 'alt' => 'Magento Certified Frontend Developer', 'resize' => true]) !!}
                </a>
                I'm a {{ $age }} year old Magento 2 developer and DevOps Engineer from the UK. I've been building
                websites for over 20 years and started with simple html sites before moving onto PHP and MySQL powered
                custom-built CMS's and then eventually onto the Magento platform.
            </p>
            <p class="text-base text-gray-700 md:text-lg sm:px-4">
                Over the years I've seen the massive change in the building and hosting of sites from CSS changes to
                secure coding becoming something everyone needs to learn. Hosting has gone from uploading files to a
                live environment on a shared server to DevOps Engineer Cloud based CI & CD over vast fleets of machines.
            </p>
            <hr class="w-full my-8 border-gray-300"/>
        </div>
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="lg:pr-10">
                <h3 class="mb-4 text-3xl font-extrabold leading-none">
                    Other Interests
                </h3>
                <p class="mb-6 text-gray-900">
                    Another passion of mine is gaming, having grown up with an Amiga, I moved to the PC in 1999 and
                    have enjoyed many genres of gaming. RPG (Role Playing Games) are my favourite at the
                    moment but, Forza Horizon 3 is my game of choice currently. You may find me online in Steam or
                    <a href="https://account.xbox.com/en-gb/profile?gamertag=clivewalkden" rel="me" target="_blank">Xbox</a>.
                </p>
                <p class="mb-6 text-gray-900">
                    I enjoy getting out and about with my camera (although since having children my time is limited). I
                    like to take wildlife and landscapes, some of my work is viewable at <a href="https://www.viewbug.com/member/clivewalkden" rel="me" target="_blank">ViewBug</a> or <a href="https://500px.com/p/CliveWalkden" rel="me" target="_blank">500px</a>.
                </p>
                <p class="mb-6 text-gray-900">
                    As well as a web developer I have founded a couple of companies in the past, UberThemes which specialised in PHP Nuke
                    Themes for Gamers, UberRC which manufacturers parts for RC (Remote Control) cars, mainly HPI,
                    Traxxas and Losi.
                </p>
                <p class="mb-6 text-gray-900">
                    I hope you enjoy the site and find it useful.
                </p>
                <hr class="mb-5 border-primary"/>
                <div class="flex items-center space-x-4">
                    @foreach ($page->social as $sm)
                        @include('_partials.social', $sm)
                    @endforeach
                </div>
            </div>
            <div class="flex justify-center">
                {!! $page->image("/assets/images/clive-walkden.jpg", 588, 384, ['class' => 'rounded-full flex items-center justify-center object-cover w-80 h-80 rounded shadow-lg sm:w-96 sm:h-96 Sirv', 'title' => 'Clive Walkden', 'alt' => 'Clive Walkden', 'resize' => true, 'data-options' => 'fit:contain']) !!}
            </div>
        </div>
    </div>

    @include('_partials.experience-segment', ['block_title' => 'Commercial Experience'])

@endsection
