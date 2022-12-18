<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Landing Page Section Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
            <div class="pr-12 sm:pr-0">
                <div class="relative max-w-xs mb-12">
                    <img class="object-bottom rounded-md lg:scale-150 sm:scale-100 shadow-sm"
                        src="assets/img/lembang.jpg" alt="lembang" />

                    <!-- <img class="absolute origin-bottom-right scale-75 rounded-md -bottom-12 -right-12" src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg" alt="" /> -->
                    <img class="absolute origin-bottom-right scale-50 rounded-md -bottom-12 -right-12 lg:-right-32"
                        src="assets/img/maskot-removebg-preview.png" alt="Maskot Jabar" />

                </div>
            </div>

            <div>
                <!-- logo mari wisata -->
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    Let's go Jabar</br>
                    <span class="text-blue-500">Mari Wisata</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-gray-600 text-justify">Provinsi Jawa Barat secara
                    geografis terletak
                    diantara 5&deg;50`- 7&deg;50` Lintang Selatan dan 104&deg; 48`- 108&deg; 48` Bujur Timur, dengan
                    luas wilayah daratan 3.710.061,32 hektar. Masyarakat Jawa Barat dikenal sebagai masyarakat yang
                    agamis, dengan kekayaan warisan budaya dan nilai-nilai luhur tradisional, serta memiliki prilaku
                    sosial yang berfalsafah pada silih asih, silih asah, silih asuh, yang secara harfiah berarti saling
                    mengasihi, saling memberi pengetahuan dan saling mengasuh diantara warga masyarakat. Datang dan
                    nikmati keindahan alam Jawa Barat!</p>
            </div>
        </div>
    </div>
</section>
<!-- Landing Page Section End -->

<!-- Destinasi Section Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Destinasi Wisata Terkini
            </h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Deskripsi</p>
        </div>

        <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
            <div>
                <a href="#" title="" class="block rounded-lg aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full" src="assets/img/green-canyon.jpeg" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9">Pegunungan
                </span>
                <p class="mt-6 text-xl font-semibold">
                    <a href="#" title="" class="text-black">Green Canyon Pangandaran</a>
                </p>
                <p class="mt-4 text-gray-600">Green Canyon merupakan wisata alam berupa aliran sungai yang diapit oleh
                    dua buah bukit bebatuan yang menembus gua. Pada mulut goa dihiasi gemercik tetesan air yang
                    menyerupai hujan abadi yang memberikan kesan kesempurnaan akan keindahan alam.</p>
                <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase">Desa Kertayasa, Kecamatan
                    Cijulang, Kabupaten Pangandaran</span>
            </div>

            <div>
                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-2.jpg" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9">
                    Pantai </span>
                <p class="mt-6 text-xl font-semibold">
                    <a href="#" title="" class="text-black"> 6 Product launching emails you want to use on next
                        campaign. </a>
                </p>
                <p class="mt-4 text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    Velit officia consequat duis enim velit mollit.</p>
                <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Martin Jones . June 12,
                    2021 </span>
            </div>

            <div>
                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-3.jpg" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9">
                    Gunung </span>
                <p class="mt-6 text-xl font-semibold">
                    <a href="#" title="" class="text-black"> Learn from the best: 7 email marketing ideas you can use
                    </a>
                </p>
                <p class="mt-4 text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    Velit officia consequat duis enim velit mollit.</p>
                <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Martin Jones . June 12,
                    2021 </span>
            </div>
        </div>
    </div>
</section>
<!-- Destinasi Section End -->

<!-- Record Pengunjung Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h4 class="text-xl font-medium text-gray-900">Numbers tell the hard works we’ve done in last 6 years</h4>
        </div>

        <div class="grid grid-cols-1 gap-6 px-6 mt-8 sm:px-0 lg:mt-16 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-12">
            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                <div class="px-4 py-6">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <div class="ml-4">
                            <h4 class="text-4xl font-bold text-gray-900">6+</h4>
                            <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Years in business</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                <div class="px-4 py-6">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <div class="ml-4">
                            <h4 class="text-4xl font-bold text-gray-900">37+</h4>
                            <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Team members</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                <div class="px-4 py-6">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div class="ml-4">
                            <h4 class="text-4xl font-bold text-gray-900">3,274</h4>
                            <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Projects delivered</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                <div class="px-4 py-6">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                        <div class="ml-4">
                            <h4 class="text-4xl font-bold text-gray-900">98%</h4>
                            <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Customer success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Record Pengunjung End -->

<!-- Grafik Picture Start -->
<section class="pt-10 bg-amber-400 2xl:py-24 2xl:bg-white sm:pt-16 md:pt-0">
    <div class="px-4 mx-auto rounded-md bg-amber-400 max-w-7xl sm:px-6 lg:px-8">
        <div class="2xl:pl-24">
            <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-8 2xl:gap-x-20">
                <div class="text-center md:py-16 xl:py-24 md:text-left">
                    <blockquote>
                        <p class="text-2xl font-semibold leading-relaxed text-gray-900">“Amet minim mollit non deserunt
                            ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.”</p>
                    </blockquote>
                    <div class="mt-6 sm:flex sm:items-baseline sm:justify-center md:justify-start">
                        <p class="text-base font-semibold text-gray-900">Jenny Wilson</p>
                        <p class="mt-2 text-base text-gray-700 sm:mt-0 sm:ml-2">Project Manager at Microsoft</p>
                    </div>
                    <p class="mt-12 text-base text-gray-900 lg:mt-20">Want to see Celebration in action?</p>
                    <a href="#" title=""
                        class="inline-flex items-center justify-center px-8 py-4 mt-4 text-base font-semibold text-white transition-all duration-200 bg-black rounded-md hover:opacity-80 focus:opacity-80"
                        role="button"> Create your first website </a>
                </div>

                <div class="relative">
                    <img class="md:absolute md:bottom-0 md:scale-110 md:origin-bottom-right lg:scale-75 2xl:scale-100 2xl:-mt-20"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/11/smiling-man.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Grafik Picuture End -->

<!-- Blog Start -->
<section class="py-12 bg-white sm:py-16 lg:py-20">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl font-pj">Read our blog</h2>
            <p class="mt-5 font-normal text-gray-600 font-pj">With lots of unique blocks, you can easily build a page
                without coding. Build your next landing page.</p>
        </div>

        <div
            class="grid max-w-3xl grid-cols-1 mx-auto mt-8 text-center sm:mt-16 sm:text-left sm:grid-cols-2 gap-y-8 gap-x-8 lg:gap-x-20">
            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125"
                        src="https://cdn.rareblocks.xyz/collection/clarity/images/blog/1/blog-1.png" alt="" />
                </div>
                <p class="mt-6 text-sm font-normal text-gray-600 font-pj">November 22, 2021</p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">How To Optimize Progressive Web Apps: Going
                    Beyond The Basics</p>
                <a href="#" title="">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>
            </div>

            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125"
                        src="https://cdn.rareblocks.xyz/collection/clarity/images/blog/1/blog-2.png" alt="" />
                </div>
                <p class="mt-6 text-sm font-normal text-gray-600 font-pj">November 16, 2021</p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">How To Optimize Progressive Web Apps: Going
                    Beyond The Basics</p>
                <a href="#" title="">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Blog End -->

<?= $this->endSection(); ?>