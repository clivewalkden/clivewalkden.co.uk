---
extends: _layouts.main
meta_title: About Me | Clive Walkden
meta_description: I'm a 31 year old PHP developer from the UK. My skills lie in website development using PHP, MySQL, HTML5, CSS3 and jQuery.
---

@section('body')
    <p class="border-b border-solid text-title mb-5 pb-12">I'm a 39 year old PHP developer from the UK. My skills lie in website development using <a href="/blog/php/" class="text-primary">PHP</a>, MySQL, <a href="/blog/html5/" class="text-primary">HTML5</a>, <a href="/blog/css/" class="text-primary">CSS3</a> and <a href="/blog/jquery/" class="text-primary">jQuery</a>. Having co-run my own design agency and seeing the major advances in the internet I thought I’d contribute a little of my knowledge to the community in general.</p>
    <div class="grid grid-cols-4 gap-2 flex items-stretch">
        <div class="self-center">
            <a href="mailto:%63%6f%6e%74%61%63%74%40%63%6c%69%76%65%77%61%6c%6b%64%65%6e%2e%63%6f%2e%75%6b"
               class="block rounded-full w-48 h-48 flex items-center bg-primary">
                <img src="/assets/images/clive-walkden.jpg" alt="About Clive Walkden PHP Developer" title="Email Me!" class="rounded-full">
            </a>
        </div>
        <div class="col-span-3 text-sm self-center">
            <p class="mb-2">Another passion of mine is PC gaming, having grown up with an Amiga, i moved to the PC in 1999 and have enjoyed many different genres of gaming. RPG (Role Playing Games) are my favourite at the moment with Elder Scrolls IV: Skyrim taking up many hours.</p>
            <p class="mb-2">As well as a web developer I am one of the founders of UberThemes which specialised in PHP Nuke Themes for Gamers, UberRC which manufacturers parts for RC (Remote Control) cars, mainly HPI, Traxxas and Losi.</p>
            <p class="mb-2">I hope you enjoy the site and find it useful.</p>
        </div>
    </div>
@endsection
