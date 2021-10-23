<header class="bg-gray-800 p-8 mt-0 fixed w-full z-10 top-0">
    <div class="container mx-auto flex flex-wrap items-center">
        <div class="flex w-1/2 justify-center md:justify-start text-white">
            <a href="/" class="text-white no-underline hover:text-white hover:no-underline">
                <h1 class="text-3xl pl-2" style="text-shadow: 1px 1px 0 #ffae00">Clive Walkden</h1>
                <span class="font-serif italic items-center text-gray-200 pl-2 text-xs lg:text-base hidden md:block">SysOps, Magento 2, PHP and my general mind dumps.</span>
            </a>
        </div>

        <div class="w-full lg:hidden flex justify-end flex-1 md:float-right">
            <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                        Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        @include('_partials/nav')
    </div>
</header>
