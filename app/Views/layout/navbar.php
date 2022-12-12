<header>
    <!-- lg+ -->
    <div class="bg-gray-100 border-b border-gray-200">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between h-16 lg:h-20">
                <div class="hidden lg:flex lg:items-center lg:space-x-10">
                    <a href="<?= base_url('/'); ?>" title="" class="text-base font-medium text-black"> Home </a>
                    <a href="/pages/wisata" title="" class="text-base font-medium text-black group-hover:text-blue-400">
                        Wisata </a>
                    <a href="/pages/about" title="" class="text-base font-medium text-black"> About </a>
                </div>

                <div class="lg:absolute lg:-translate-x-1/2 lg:inset-y-5 lg:left-1/2">
                    <div class="flex-shrink-0">
                        <a href="#" title="" class="flex">
                            <!-- <img class="w-auto h-8 lg:h-10" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg" alt="" /> -->
                            <h1 class="text-xl">Mari Wisata</h1>
                        </a>
                    </div>
                </div>

                <button type="button"
                    class="inline-flex p-2 ml-5 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <div class="hidden lg:flex lg:items-center lg:space-x-10">
                    <a href="#" title="" class="text-base font-medium text-black"> Sign in </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- xs to lg -->
    <nav class="py-4 bg-white lg:hidden">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Menu</p>

                <button type="button"
                    class="inline-flex p-2 text-black transition-all duration-200 rounded-md focus:bg-gray-100 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="mt-6">
                <div class="flex flex-col space-y-2">
                    <a href="#" title=""
                        class="py-2 text-base font-medium text-black transition-all duration-200 focus:text-blue-600">
                        Home </a>
                    <a href="#" title=""
                        class="py-2 text-base font-medium text-black transition-all duration-200 focus:text-blue-600">
                        Wisata </a>
                    <a href="#" title=""
                        class="py-2 text-base font-medium text-black transition-all duration-200 focus:text-blue-600">
                        About </a>
                </div>

                <hr class="my-4 border-gray-200" />

                <div class="flex flex-col space-y-2">
                    <a href="#" title=""
                        class="py-2 text-base font-medium text-black transition-all duration-200 focus:text-blue-600">
                        Sign in </a>
                </div>
            </div>
        </div>
    </nav>
</header>