<div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100"
             fill="currentColor" preserveAspectRatio="none slice">
            <path d="M50 0H100L50 100H0L50 0Z"></path>
        </svg>
        {!! $page->image("/assets/images/website-code.jpg", 1280, 688, ['title' => 'Clive Walkden Magento 2 Developer', 'alt' => 'Clive Walkden SysOps Developer', 'class' => 'object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full', 'fetchpriority' => 'high']) !!}
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
            <h1 class="mb-5 font-sans text-3xl font-bold tracking-tight text-title sm:text-4xl sm:leading-none">
                Dev Ops Engineer<br class="hidden md:block"/>
                and Magento 2 Developer
            </h1>
            <p class="pr-5 mb-5 text-base text-title md:text-lg">
                I'm the CTO for <a href="https://sozodesign.co.uk" title="SOZO Design Cheltenham" target="_blank" class="text-primary">SOZO Design</a> in Cheltenham, UK. I also build Magento 2 sites and other PHP projects. View my <a href="/portfolio/" class="text-primary">Magento 2 modules</a> and <a href="/portfolio/" class="text-primary">jQuery plugins</a>.
            </p>
            <div class="flex items-center">
                <a
                    href="/blog/"
                    class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-yellow-400 hover:bg-yellow-700 focus:shadow-outline focus:outline-none"
                >
                    Blog Articles
                </a>
                <a href="/portfolio/" aria-label=""
                   class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-yellow-700">Portfolio</a>
            </div>
        </div>
    </div>
</div>
