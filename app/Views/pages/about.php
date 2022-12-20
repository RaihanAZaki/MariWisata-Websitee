<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Profile Section Start -->
<section class="pt-10 overflow-hidden bg-gray-50 md:pt-0 sm:pt-16 2xl:pt-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Hello 👋, We <br
                        class="block sm:hidden" />Mari Wisata</h2>
                <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">Perkenalkan kami Raihan, Rizki,
                    Rifqi, dan Edwin. Kami mahasiswa dari Universitas
                    Pembangunan Jaya, program studi Informatika.</p>

                <p class="mt-4 text-xl text-gray-600 md:mt-8">
                    <span class="relative inline-block">
                        <span class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300"></span>
                        <span class="relative"> Ada Pertanyaan? </span>
                    </span>
                    <br class="block sm:hidden" />Kirim pesan anda <a href="#" title="" data-modal-toggle="kirimPesan"
                        class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">disini</a>
                </p>

                <!-- Main modal Start -->
                <div id="kirimPesan" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-2xl md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Kirim Pesan
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="kirimPesan">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="mt-6 overflow-hidden bg-white rounded-xl">
                                <div class="px-6 py-12 sm:p-12">
                                    <h3 class="text-3xl font-semibold text-center text-gray-900">Kirim Pesan Anda</h3>

                                    <form action="#" method="POST" class="mt-14">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                            <div>
                                                <label for="" class="text-base font-medium text-gray-900"> Nama </label>
                                                <div class="mt-2.5 relative">
                                                    <input type="text" name="" id="" placeholder="Masukan nama.."
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-base font-medium text-gray-900"> Email
                                                </label>
                                                <div class="mt-2.5 relative">
                                                    <input type="email" name="" id="" placeholder="Masukan email.."
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-base font-medium text-gray-900"> Nomer Telfon
                                                </label>
                                                <div class="mt-2.5 relative">
                                                    <input type="tel" name="" id="" placeholder="Masukan nomer telfon.."
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <label for="" class="text-base font-medium text-gray-900">
                                                    Pesan </label>
                                                <div class="mt-2.5 relative">
                                                    <textarea name="" id="" placeholder=""
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <button type="submit"
                                                    class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">
                                                    Kirim
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main modal End -->
            </div>

            <div class="relative">
                <img class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2"
                    src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg" alt="" />
                
                <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110"
                    src="assets/img/team.png" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- Profile Section End -->

<!-- Section Lebih Dekat Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-24">
            <div>
                <img class="w-full max-w-md mx-auto rounded-full"
                    src="assets/element/109-map-location.png"
                    alt="" />
            </div>

            <div class="text-center lg:text-left">
                <span class="relative inline-block">
                    <span class="absolute inline-block w-10 bottom-0.5 h-2 bg-yellow-300"></span>
                    <span class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl relative">Lebih Dekat Dengan Mari Wisata</span>
                </span>
                <p class="mt-6 text-base text-gray-600">Mari Wisata merupakan website yang menyediakan destinasi wisata yang menarik di daerah pulau jawa, terlebih di daerah Jawa Barat. Mari Wisata memberikan gambar wisata, lokasi wisata, grafik pengunjung dan total jumlah pengunjung disetiap destinasi wisata, sehingga para calon wisata memahami dan mengerti tempat wisata apa yang ingin mereka kunjungi.</p>

                <a href="#" title=""
                    class="inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md mt-9 hover:bg-blue-700 focus:bg-blue-700"
                    role="button">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- Section Lebih Dekat End -->

<!-- Section Download Start -->
<section class="py-5 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <svg class="mx-auto w-14 h-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
            </svg>
            <h2 class="mt-10 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Download Mari Wisata Apps</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Hanya perlu 10 menit untuk mengatur di perangkat apa pun, Ayo download sekarang.</p>
        </div>

        <div
            class="flex flex-col items-center justify-center mt-8 space-y-4 md:space-y-0 md:space-x-4 md:flex-row lg:mt-12">
            <a href="https://www.apple.com/id/ios/ios-16/" target="_blank" title="ios"
                class="inline-flex items-center justify-center px-4 py-4 text-black transition-all duration-200 border-2 border-black rounded-md hover:bg-black hover:text-white focus:bg-black focus:text-white"
                role="button">
                <svg class="w-6 h-6 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M19.665 16.811a10.316 10.316 0 0 1-1.021 1.837c-.537.767-.978 1.297-1.316 1.592-.525.482-1.089.73-1.692.744-.432 0-.954-.123-1.562-.373-.61-.249-1.17-.371-1.683-.371-.537 0-1.113.122-1.73.371-.616.25-1.114.381-1.495.393-.577.025-1.154-.229-1.729-.764-.367-.32-.826-.87-1.377-1.648-.59-.829-1.075-1.794-1.455-2.891-.407-1.187-.611-2.335-.611-3.447 0-1.273.275-2.372.826-3.292a4.857 4.857 0 0 1 1.73-1.751 4.65 4.65 0 0 1 2.34-.662c.46 0 1.063.142 1.81.422s1.227.422 1.436.422c.158 0 .689-.167 1.593-.498.853-.307 1.573-.434 2.163-.384 1.6.129 2.801.759 3.6 1.895-1.43.867-2.137 2.08-2.123 3.637.012 1.213.453 2.222 1.317 3.023a4.33 4.33 0 0 0 1.315.863c-.106.307-.218.6-.336.882zM15.998 2.38c0 .95-.348 1.838-1.039 2.659-.836.976-1.846 1.541-2.941 1.452a2.955 2.955 0 0 1-.021-.36c0-.913.396-1.889 1.103-2.688.352-.404.8-.741 1.343-1.009.542-.264 1.054-.41 1.536-.435.013.128.019.255.019.381z">
                    </path>
                </svg>
                Download for IOS
            </a>

            <a href="https://www.android.com/intl/id_id/" target="_blank" title="android"
                class="inline-flex items-center justify-center px-4 py-4 text-black transition-all duration-200 border-2 border-black rounded-md hover:bg-black hover:text-white focus:bg-black focus:text-white"
                role="button">
                <i class="fa-brands fa-android mr-3"></i>
                Download for Android
            </a>
        </div>
    </div>
</section>
<!-- Section Download End -->

<!-- Client Section Start -->
<section id="#" class="pt-36 pb-32 bg-slate-700 dark:bg-slate-300">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto text-center mb-16">
                <h2 class="font-bold text-secondary text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nesciunt reiciendis sequi voluptatibus laudantium similique eveniet quas in consectetur earum!</p>
            </div>
        </div>
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                <a href="#"
                    class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="assets/logo/upj-logo.png" alt="upj">
                </a>
                <a href="#"
                    class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="assets/logo/inf-logo.jpeg" alt="inf">
                </a>
                <a href="#"
                    class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="assets/logo/tailwind-logo.png" alt="tailwind">
                </a>
                <a href="#"
                    class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="assets/logo/ci-logo.png" alt="ci">
                </a>
                <a href="#"
                    class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="assets/logo/jabar-logo.png" alt="jabar">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Join Section Start -->
<section class="bg-slate-100 2xl:py-24 2xl:bg-slate-50">
    <div class="px-4 mx-auto bg-slate-100 max-w-7xl sm:px-6 lg:px-8 2xl:rounded-xl">
        <div class="py-10 sm:py-16 lg:py-24 2xl:pl-24">
            <div class="grid items-center grid-cols-1 gap-y-8 lg:grid-cols-2 lg:gap-x-8 2xl:gap-x-20">
                <div class="lg:order-2 2xl:-mr-24">
                    <img class="w-full shadow-xl rounded-lg" src="assets/img/AdminLTE-3-Dashboard.png" alt="" />
                </div>

                <div class="lg:order-1">
                    <h2 class="text-3xl font-bold leading-tight text-secondary sm:text-4xl lg:text-5xl lg:leading-snug">Apakah kamu bersedia  <br class="hidden xl:block text-secondary" /> menjadi bagian dari Mari Wisata?</h2>

                    <ul class="grid grid-cols-1 mt-4 sm:mt-10 sm:grid-cols-2 gap-x-10 xl:gap-x-16 gap-y-4 xl:gap-y-6">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 font-medium text-secondary"> Referensi Wisata Bersama Keluarga </span>
                        </li>

                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 font-medium text-secondary"> Hidden Gem Wisata Di Jawa Barat </span>
                        </li>

                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 font-medium text-secondary"> Post, Edit & Customize </span>
                        </li>
                    </ul>

                    <div class="flex flex-col items-start mt-8 sm:space-x-4 sm:flex-row sm:items-center lg:mt-12">
                        
                        <a href="#" title="" class="inline-flex items-center justify-center px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:bg-blue-700" role="button">
                            <svg class="w-6 h-6p mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Explore Now
                        </a>

                        <a href="#" title="" class="inline-flex items-center justify-center px-4 py-4 mt-5 text-base font-semibold text-secondary transition-all duration-200 bg-transparent border border-secondary rounded-md sm:mt-0 hover:bg-secondary hover:text-black" role="button"> Join </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join Section End -->


<?= $this->endSection(); ?>