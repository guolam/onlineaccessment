<x-app-layout>

    @php
        $kanjiNames = [
            'Problemsolving' => '問題解決力',
            'Resilience' => 'レジリエンス',
            'Problemfocus' => '問題焦点型',
            'Timeperspective' => '時間的展望',
            'Selfesteem' => '自己肯定感',
            'Selfunderstand' => '自己認知',
            'Communication' => 'コミュニケーション力',
        ];
        
    @endphp

    <head>
        <title>ビジネス力診断</title>
        <!-- Chart.jsのスクリプトを読み込む -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/result.js') }}"></script>
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('診断結果') }}
        </h2>
    </x-slot>

    <body>
        @auth
            <div class="flex justify-center">
                <x-primary-button id="questionnaire" class="mt-4 mb-4 py-2 px-4 bg-blue-500 text-black rounded-lg">
                    <a href="{{ route('test') }}">新たな診断を受ける</a>
                </x-primary-button>
            </div>
            <div class="flex justify-center">
                {{-- メールで照合 --}}
                <input type="hidden" id="email" name="email" value="{{ auth()->user()->email }}">
                <x-primary-button id="fetchData" class="mt-4 mb-4 py-2 px-4 bg-blue-500 text-black rounded-lg">
                    <a href="{{ route('result') }}">診断結果はこちらをクリック</a>
                </x-primary-button>
            </div>
        @endauth

        <div class="flex justify-center items-center">
            <div class="w-full sm:w-1/2">
                <canvas id="radarChart" class="w-full"></canvas>
            </div>
        </div>


        {{-- 回答結果を取得 --}}
        <div class="container mx-auto mt-8">
            <h2 class="text-xl font-semibold mb-4">結果:</h2>
            <div class="bg-white rounded-lg shadow-md">
                <table class="w-full border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 text-left">日付</th>
                            @foreach ($attribution as $name)
                                <th class="py-2 px-4 text-left">{{ $kanjiNames[$name] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $index => $array)
                            <tr>
                                <td class="py-2 px-4">{{ $date[$index] }}</td>
                                @foreach ($array as $average)
                                    <td class="py-2 px-4">{{ number_format($average, 2) }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        @foreach ($attribution as $index => $name)
            <div class="container mx-auto mt-8">
                <h2 class="text-xl font-semibold mb-4">{{ $kanjiNames[$name] }}の詳細:</h2>
                <div class="bg-white rounded-lg shadow-md">
                    <table class="w-full border-collapse">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 text-left">日付</th>
                                <th class="py-2 px-4 text-left">点数</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $index => $array)
                                <tr>
                                    <td class="py-2 px-4">{{ $date[$index] }}</td>
                                    <td class="py-2 px-4">{{ $array[$index] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
        <div class="mb-5">
        </div>
        <script>
            // $result $attribution を取得
            let result = @json($result ?? null);
            let attribution = @json($attribution ?? null);
            let date = @json($date ?? null);
            let datasetsArray = [];

            for (let i = 0; i < result.length; i++) {
                datasetsArray.push({
                    label: `${date[i]}`,
                    data: result[i],
                    borderColor: `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 1)`,
                    backgroundColor: `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 0.2)`
                });
            }


            let ctx = document.getElementById('radarChart').getContext('2d'); // 注意: canvas IDを 'radarChart' に変更しています
            let radarChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: attribution,
                    datasets: datasetsArray
                },
                options: {
                    responsive: true,
                    scales: {
                        r: {
                            suggestedMin: 0,
                            suggestedMax: 5,
                        }
                    }
                }
            });

            // 新しいラベルの配列
            const newLabels = ['問題解決力', 'レジリエンス', '問題焦点型', '時間的展望', '自己肯定感', '自己認知', 'コミュニケーション力'];
            radarChart.data.labels = newLabels;
            // チャートを再描画する
            radarChart.update();
        </script>
    </body>


</x-app-layout>
