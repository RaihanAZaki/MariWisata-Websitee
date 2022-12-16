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
                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-1.jpg" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9">
                    Technology </span>
                <p class="mt-6 text-xl font-semibold">
                    <a href="#" title="" class="text-black"> How to mange your remote team? </a>
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
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-2.jpg" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9">
                    Marketing </span>
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
                    Marketing </span>
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

<?= $this->endSection(); ?>