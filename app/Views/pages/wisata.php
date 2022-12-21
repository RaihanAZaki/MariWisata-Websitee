<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Chart Section Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Line chart</div>
            <canvas class="p-10" id="chartLine"></canvas>
        </div>
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

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
</style>

<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
            <div class="bg-gray-800 text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2" x-data="{chartData:chartData()}" x-init="chartData.fetch()">
                <div class="flex flex-wrap items-end">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold leading-tight">Total Pengunjung</h3>
                    </div>
                    <div class="relative" @click.away="chartData.showDropdown=false">
                        <button class="text-xs hover:text-gray-300 h-6 focus:outline-none" @click="chartData.showDropdown=!chartData.showDropdown">
                            <span x-text="chartData.options[chartData.selectedOption].label"></span><i class="ml-1 mdi mdi-chevron-down"></i>
                        </button>
                        <div class="bg-gray-700 shadow-lg rounded text-sm absolute top-auto right-0 min-w-full w-32 z-30 mt-1 -mr-3" x-show="chartData.showDropdown" style="display: none;" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
                            <span class="absolute top-0 right-0 w-3 h-3 bg-gray-700 transform rotate-45 -mt-1 mr-3"></span>
                            <div class="bg-gray-700 rounded w-full relative z-10 py-1">
                                <ul class="list-reset text-xs">
                                    <template x-for="(item,index) in chartData.options">
                                        <li class="px-4 py-2 hover:bg-gray-600 hover:text-white transition-colors duration-100 cursor-pointer" :class="{'text-white':index==chartData.selectedOption}" @click="chartData.selectOption(index);chartData.showDropdown=false">
                                            <span x-text="item.label"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-end mb-5">
                    <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2" x-text="'Jumlah '+(chartData.data?chartData.data[chartData.date].total.comma_formatter():0)">0</h4>
                    <span class="inline-block" :class="chartData.data&&chartData.data[chartData.date].upDown<0?'text-red-500':'text-green-500'"><span x-text="chartData.data&&chartData.data[chartData.date].upDown<0?'▼':'▲'">0</span> <span x-text="chartData.data?chartData.data[chartData.date].upDown:0">0</span>%</span>
                </div>
                <div>
                    <canvas id="chart" class="w-full"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    Number.prototype.comma_formatter = function() {
        return this.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }

    let chartData = function() {
        return {
            date: 'today',
            options: [{
                    label: 'Today',
                    value: 'today',
                },
                {
                    label: 'Last 7 Days',
                    value: '7days',
                },
                {
                    label: 'Last 30 Days',
                    value: '30days',
                },
                {
                    label: 'Last 6 Months',
                    value: '6months',
                },
                {
                    label: 'This Year',
                    value: 'year',
                },
            ],
            showDropdown: false,
            selectedOption: 0,
            selectOption: function(index) {
                this.selectedOption = index;
                this.date = this.options[index].value;
                this.renderChart();
            },
            data: null,
            fetch: function() {
                fetch('https://cdn.jsdelivr.net/gh/swindon/fake-api@master/tailwindAlpineJsChartJsEx1.json')
                    .then(res => res.json())
                    .then(res => {
                        this.data = res.dates;
                        this.renderChart();
                    })
            },
            renderChart: function() {
                let c = false;

                Chart.helpers.each(Chart.instances, function(instance) {
                    if (instance.chart.canvas.id == 'chart') {
                        c = instance;
                    }
                });

                if (c) {
                    c.destroy();
                }

                let ctx = document.getElementById('chart').getContext('2d');

                let chart = new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: this.data[this.date].data.labels,
                        datasets: [{
                                label: "Income",
                                backgroundColor: "rgba(102, 126, 234, 0.25)",
                                borderColor: "rgba(102, 126, 234, 1)",
                                pointBackgroundColor: "rgba(102, 126, 234, 1)",
                                data: this.data[this.date].data.income,
                            },
                            {
                                label: "Expenses",
                                backgroundColor: "rgba(237, 100, 166, 0.25)",
                                borderColor: "rgba(237, 100, 166, 1)",
                                pointBackgroundColor: "rgba(237, 100, 166, 1)",
                                data: this.data[this.date].data.expenses,
                            },
                        ],
                    },
                    layout: {
                        padding: {
                            right: 10
                        }
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    callback: function(value, index, array) {
                                        return value > 1000 ? ((value < 1000000) ? value / 1000 + 'K' : value / 1000000 + 'M') : value;
                                    }
                                }
                            }]
                        }
                    }
                });
            }
        }
    }
</script>



<!-- <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
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
</section> -->




<?= $this->endSection(); ?>