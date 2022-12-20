<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Landing Page Section Start -->
<h1>Hello World</h1>
<!-- Landing Page Section End -->

<!-- Chart Section Start -->
<section class="pt-10 overflow-hidden bg-gray-50 md:pt-0 sm:pt-16 2xl:pt-16">
    <div class="shadow-lg rounded-lg overflow-hidden">
        <div class="py-3 px-5 bg-gray-50">Line chart</div>
        <canvas class="p-10" id="chartLine"></canvas>
    </div>

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart line -->
    <script>
    const labels = ["January", "February", "March", "April", "May", "June"];
    const data = {
        labels: labels,
        datasets: [{
            label: "Data Mari Wisata",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: [0, 10, 5, 2, 20, 30, 45],
        }, ],
    };

    const configLineChart = {
        type: "line",
        data,
        options: {},
    };

    var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );
    </script>
</section>
<!-- Chart Section End -->

<section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 sm:gap-x-12 gap-y-12">
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold leading-tight text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight">
                    1 team.<br />
                    6+ years.<br />
                    300+ projects.<br />
                </h2>
                <p class="mt-6 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
            </div>

            <div class="lg:col-span-3 xl:col-span-4">
                <div class="grid items-center max-w-4xl grid-cols-2 mx-auto lg:grid-cols-4 gap-x-10 gap-y-16">
                    <div>
                        <img class="object-contain w-full h-6 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-1.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-2.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-3.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full mx-auto h-7" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-4.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-5.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-6.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-7.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-8.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-9.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full mx-auto h-7" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-10.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-11.png" alt="" />
                    </div>

                    <div class="hidden lg:block">
                        <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-12.png" alt="" />
                    </div>
                </div>

                <div class="flex items-center justify-start mt-10 space-x-3 lg:hidden">
                    <div class="w-2.5 h-2.5 rounded-full bg-blue-600 block"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                </div>
            </div>
        </div>
    </div>
</section>




<?= $this->endSection(); ?>