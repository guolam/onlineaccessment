<x-app-layout>

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
        </script>
    </body>


</x-app-layout>
