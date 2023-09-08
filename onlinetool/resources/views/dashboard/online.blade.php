<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ビジネス力診断</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">


        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('ダッシュボード') }}
            </h2>

        </x-slot>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

            .font-family-karla {
                font-family: karla;
            }

            .bg-sidebar {
                background: #292929;
            }

            .cta-btn {
                color: #292929;
            }

            .upgrade-btn {
                background: #292929;
            }

            .upgrade-btn:hover {
                background: #292929;
            }

            .active-nav-link {
                background: #292929;
            }

            .nav-item:hover {
                background: #292929;
            }

            .account-link:hover {
                background: #292929;
            }
        </style>
    </head>

    <body class="bg-gray-100 font-family-karla flex">

        <div class="w-full flex flex-col h-screen overflow-y-hidden">

            <div class="mt-4 px-14">
                <div class="flex flex-wrap -mx-6">
                    <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                        fill="currentColor" />
                                    <path
                                        d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                        fill="currentColor" />
                                    <path
                                        d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                        fill="currentColor" />
                                    <path
                                        d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">8,282</h4>
                                <div class="text-gray-500">New Users</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                                        fill="currentColor" />
                                    <path
                                        d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                                        fill="currentColor" />
                                    <path
                                        d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">200,521</h4>
                                <div class="text-gray-500">Total Orders</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                                <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                        stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path
                                        d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                        stroke="currentColor" stroke-width="2" />
                                </svg>
                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                <div class="text-gray-500">Available Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ダッシュボード内容 各種グラフと統計 --}}
            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow px-14">
                    <div class="flex flex-wrap mt-6">
                        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-plus mr-3"></i> レダーチャート
                            </p>
                            <div class="p-6 bg-white">
                                <canvas id="chartTwo" width="400" height="200"></canvas>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-check mr-3"></i> 数値
                            </p>
                            <div class="p-6 bg-white">
                                <canvas id="chartOne" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-12">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-list mr-3"></i> 受講生診断記録
                        </p>
                        <div class="bg-white overflow-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">名前</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">部署
                                        </th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">平均点数</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ステータス</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">詳細</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                        <td class="text-left py-3 px-4">Smith</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="tel:622322662">622322662</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="#">詳細画面</a>
                                    </tr>


                                    </td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                        <td class="text-left py-3 px-4">Smith</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="tel:622322662">622322662</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="#">詳細画面</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                        <td class="text-left py-3 px-4">Williams</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="tel:622322662">622322662</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="#">詳細画面</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>

                <footer class="w-full bg-white text-right p-4">
                    株式会社OnLine</a>.
                </footer>
            </div>

        </div>

        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <!-- ChartJS -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            //データ共有
            const sharedData = {
                labels: ['項目1', '項目2', '項目3', '項目4', '項目5', '項目6', '項目7'],
                datasets: [{
                    label: 'データセット1',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [65, 59, 90, 81, 56, 81, 56]
                }, {
                    label: 'データセット2',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    data: [28, 48, 40, 19, 96, 40, 19]
                }]
            };

            // バー チャートの設定
            const barChartConfig = {
                type: 'bar',
                data: sharedData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Bar Chart'
                        }
                    },
                },
            };

            // レダー チャートの設定
            const radarChartConfig = {
                type: 'radar',
                data: sharedData,
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Chart.js Radar Chart'
                        }
                    }
                },
            };

            // バー チャートを描画
            var chartOne = document.getElementById('chartOne');
            var barChart = new Chart(chartOne, barChartConfig);

            // レダー チャートを描画
            var chartTwo = document.getElementById('chartTwo');
            var radarChart = new Chart(chartTwo, radarChartConfig);
        </script>
    </body>
</x-app-layout>
