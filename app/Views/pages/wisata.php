<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Search Bar Start -->
<Section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Nama Wisata..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>
</Section>
<!-- Search Bar Emd -->



<!-- Table Start -->
<section class="py-6 bg-white sm:pb-6 lg:pb-6">
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="text-left py-6 sm:py-6 lg:py-6">
            <span class="relative inline-block">
                <span class="absolute inline-block w-10 bottom-0.5 h-2 bg-yellow-300"></span>
                <span class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl relative">Table Data Mari Wisata</span>
        </div>

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Kode Provinsi
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama Provinsi
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama Kabupaten Kota
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Jenis Wisatawan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Jumlah Pengunjung
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Satuan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tahun
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $servername = "localhost";
                    // $username = "root";
                    // $password = "";
                    // $database = "mari-wisata";

                    // $connection = new mysqli($servername, $username, $password, $database);

                    // if($connection->connect_error){
                    //     die("Connection failed: " . $connection->connect_error);
                    // }

                    // $sql = "SELECT * FROM dispar";
                    // $result = $connection->query($sql);

                    // if (!$result) {
                    //     die("Invalid query: " . $connection->connect_error);
                    // }

                    // read data
                    // while($row = $result->fetch_assoc()) {



                    // }   
                    ?>



                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="py-4 px-6">
                            32
                        </td>
                        <td class="py-4 px-6">
                            JAWA BARAT
                        </td>
                        <td class="py-4 px-6">
                            KABUPATEN BOGOR
                        </td>
                        <td class="py-4 px-6">
                            MANCANEGARA
                        </td>
                        <td class="py-4 px-6">
                            54927
                        </td>
                        <td class="py-4 px-6">
                            ORANG
                        </td>
                        <td class="py-4 px-6">
                            2014
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="py-4 px-6">
                            32
                        </td>
                        <td class="py-4 px-6">
                            JAWA BARAT
                        </td>
                        <td class="py-4 px-6">
                            KABUPATEN BOGOR
                        </td>
                        <td class="py-4 px-6">
                            NUSANTARA
                        </td>
                        <td class="py-4 px-6">
                            4075198
                        </td>
                        <td class="py-4 px-6">
                            ORANG
                        </td>
                        <td class="py-4 px-6">
                            2014
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="py-4 px-6">
                            32
                        </td>
                        <td class="py-4 px-6">
                            JAWA BARAT
                        </td>
                        <td class="py-4 px-6">
                            KABUPATEN SUKABUMI
                        </td>
                        <td class="py-4 px-6">
                            MANCANEGARA
                        </td>
                        <td class="py-4 px-6">
                            49985
                        </td>
                        <td class="py-4 px-6">
                            ORANG
                        </td>
                        <td class="py-4 px-6">
                            2014
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="py-4 px-6">
                            32
                        </td>
                        <td class="py-4 px-6">
                            JAWA BARAT
                        </td>
                        <td class="py-4 px-6">
                            KABUPATEN SUKABUMI
                        </td>
                        <td class="py-4 px-6">
                            NUSANTARA
                        </td>
                        <td class="py-4 px-6">
                            2031979
                        </td>
                        <td class="py-4 px-6">
                            ORANG
                        </td>
                        <td class="py-4 px-6">
                            2014
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5
                        </th>
                        <td class="py-4 px-6">
                            32
                        </td>
                        <td class="py-4 px-6">
                            JAWA BARAT
                        </td>
                        <td class="py-4 px-6">
                            KABUPATEN CIANJUR
                        </td>
                        <td class="py-4 px-6">
                            MANCANEGARA
                        </td>
                        <td class="py-4 px-6">
                            7824
                        </td>
                        <td class="py-4 px-6">
                            ORANG
                        </td>
                        <td class="py-4 px-6">
                            2014
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Paganation -->
        <nav aria-label="Page navigation" class="my-10">
            <ul class="inline-flex -space-x-px">
                <li>
                    <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- Table End -->

<!-- Chart Start -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
</style>

<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="min-w-min min-h-min bg-white flex items-center justify-center px-5 py-5">
            <div class="bg-gray-800 text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2" x-data="{chartData:chartData()}" x-init="chartData.fetch()">
                <div class="flex flex-wrap items-end">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold leading-tight">Jumlah Pengunjung</h3>
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
                    <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2" x-text="''+(chartData.data?chartData.data[chartData.date].total.comma_formatter():0)">0</h4>
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
                                label: "Pendatang",
                                backgroundColor: "rgba(102, 126, 234, 0.25)",
                                borderColor: "rgba(102, 126, 234, 1)",
                                pointBackgroundColor: "rgba(102, 126, 234, 1)",
                                data: this.data[this.date].data.income,
                            },
                            {
                                label: "Lokal",
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
<!-- Chart End -->

<?= $this->endSection(); ?>