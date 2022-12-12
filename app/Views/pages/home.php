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
                <p class="mt-4 text-base leading-relaxed text-gray-600">Provinsi Jawa Barat secara geografis terletak
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

<?= $this->endSection(); ?>