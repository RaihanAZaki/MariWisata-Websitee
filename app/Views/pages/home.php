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
<section class="py-10 bg-white sm:py-16 lg:py-10">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Destinasi Wisata Terkini
            </h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Dengan Bandung yang penuh daya
                tarik, memilih tujuan sempurna yang Anda inginkan bisa menghadirkan tantangan</p>
        </div>
        <div class="p-10 grid mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
            <div>
                <a href="#" title="" class="block rounded-lg aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full rounded-t-lg " src="assets/img/grand-canyon.png" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-green-500 bg-green-100 mt-5">Lembah
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
                    <img class="object-cover w-full h-full" src="assets/img/santolo.png" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-5">
                    Pantai </span>
                <p class="mt-6 text-xl font-semibold">
                    <a href="#" title="" class="text-black"> Pantai Santolo </a>
                </p>
                <p class="mt-4 text-gray-600">Kawasan Pantai Santolo merupakan berkumpulnya nelayan tradisional yang
                    akan dikembangkan menjadi daerah tujuan wisata yang indah dan merupakan daerah untuk kegiatan
                    nelayan sebagai dermaga kapal ikan atau perahu yang ada di Pameungpeuk.</p>
                <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Desa Pameungpuek,
                    Kecamatan Cikelet, Kabupaten Garut, Jawa Barat </span>
            </div>

            <div>
                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full" src="assets/img/pangrango.png" alt="" />
                </a>
                <span
                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-red-500 bg-red-100 mt-5">
                    Gunung </span>
                <p class="mt-6 text-xl font-semibold">
                    <a href="#" title="" class="text-black"> Gunung Gede Pangrango
                    </a>
                </p>
                <p class="mt-4 text-gray-600">Gunung gede pangrango merupakan salah satu gunung berapi aktif yang
                    terletak di daerah Jawa Barat. Gunung ini sering dijadikan sebagai destinasi bagi para pendaki
                    karena gunung ini dapat memberikan keindahan pada puncaknya</p>
                <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase">Taman Nasional Gede
                    Pangrango, Kabupaten Cianjur dan Sukabumi, Jawa Barat</span>
            </div>
        </div>
        <div>
        </div>
</section>
<!-- Destinasi Section End -->

<!-- Record Pengunjung Start -->
<section class="py-10 bg-white sm:py-16 lg:py-10">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h4 class="text-xl font-medium text-gray-900">Kami sudah ada sejak lama dan kami telah melakukan banyak hal
            </h4>
        </div>

        <div class="grid grid-cols-3 gap-4 px-6 mt-8 sm:grid-cols-1 xl:gap-x-12">
            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                <div class="px-4 py-6">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                        <div class="ml-4">
                            <h4 class="text-4xl font-bold text-gray-900">212</h4>
                            <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Tahun kota kami telah
                                berdiri</p>
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
                            <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Ribu Pengunjung</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                <div class="px-4 py-6">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
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
<section class="mt-12 pt-10 bg-amber-400 2xl:py-20 2xl:bg-white sm:pt-16 md:pt-0">
    <div class="px-4 mx-auto rounded-md bg-amber-400 max-w-7xl sm:px-6 lg:px-8">
        <div class="2xl:pl-24">
            <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-8 2xl:gap-x-20">
                <div class="text-center md:py-16 xl:py-24 md:text-left">
                    <blockquote>
                        <p class="text-2xl font-semibold leading-relaxed text-gray-900">“Kita perlu optimis bahwa
                            perekonomian di masa depan lebih baik dan tidak berhenti berinovasi untuk mewujudkan desa
                            wisata yang mampu menarik daya saing daripada wisatawan dan juga desa wisata kita mampu
                            bersaing di dunia global. Dari desa untuk Indonesia bangkit”</p>
                    </blockquote>
                    <div class="mt-6 sm:flex sm:items-baseline sm:justify-center md:justify-start">
                        <p class="text-base font-bold text-gray-900">Sandiaga Uno</p>
                        <p class="mt-2 text-base text-gray-700 sm:mt-0 sm:ml-2">Menteri Pariwisata dan Ekonomi Kreatif
                            Indonesia</p>
                    </div>
                </div>

                <div class="relative">
                    <img class="md:absolute md:bottom-0 md:scale-110 md:origin-bottom-right lg:scale-75 2xl:scale-1000 2xl:-mt-20"
                        src="assets/img/menteri.png" alt="" />
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
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl font-pj">Temukan Berita Terbaru</h2>
            <p class="mt-5 font-normal text-gray-600 font-pj">Berita terkini seputar Jawa Barat agar anda mengetahui
                info terkini seputar Jawa Barat</p>
        </div>

        <div
            class="grid max-w-3xl grid-cols-1 mx-auto mt-8 text-center sm:mt-16 sm:text-left sm:grid-cols-2 gap-y-8 gap-x-8 lg:gap-x-20">
            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125"
                        src="assets/img/desa.png" alt="" />
                </div>
                <p class="mt-6 text-sm font-normal text-gray-600 font-pj">20 Desember 2022</p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">Respons Pemkot Bandung soal Pesona Kampung Braga
                    yang Luntur</p>
                <a href="#" title="">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>
            </div>

            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125"
                        src="assets/img/desa1.png" alt="" />
                </div>
                <p class="mt-6 text-sm font-normal text-gray-600 font-pj">19 Desember 2022</p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">Asa Warga Kampung Braga Taklukkan Metropolitan
                    Melalui Kesenian</p>
                <a href="#" title="">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Blog End -->

<?= $this->endSection(); ?>