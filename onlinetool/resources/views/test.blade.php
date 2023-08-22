<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ビジネス力診断</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/questionnaire.css') }}">
        <script src="{{ asset('assets/js/questionnaire.js') }}"></script>
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('診断') }}
        </h2>




    </x-slot>

    <body>
        <div class="flex flex-col md:flex-row justify-around content-center mt-5 mb-2">
            <div class="mb-2">
                <x-image.time />
                <p class="text-center">0分以内に完成してください</p>
            </div>

            <div class="mb-2">
                <x-image.chokan />
                <p class="text-center">直感で回答してください。</p>
            </div>

            <div class="mb-2 justify-center items-center">
                <x-image.onetime />
                <p class="text-center">一回のみ押してください</p>
            </div>

        </div>

        @auth
            <form method="POST" action="{{ route('test.submit') }}">
                @csrf

                <div class="progress-bar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-marker"></div>
                    <h4 class="progress-percentage" id="progressPercentage"></h4>
                </div>

                <div class="quiz-main-inner" id="quizContainer"></div>
                <div class="center-align">
                    <button id="submitButton" class="button center-align hidden">送信</button>
                </div>

                {{-- <div class="center-align">
            <button id="answerButton" @if ($ticket->remaining_tickets > 0) onclick="submitAnswer()" @else disabled @endif>
                テストボタン
            </button>
        </div> --}}

            </form>
        @endauth


        <style>
            .hidden {
                display: none;
            }
        </style>
        <script>
            window.questionsFromDatabase = @json($questions);
        </script>

    </body>

    {{-- <script>
        // 回答を送信する関数
        function submitAnswer() {
            // 回数券の数が0の場合は何もしない
            if ({{ $ticket->remaining_tickets }} <= 0) {
                return;
            }

            // 回答を送信する処理
            // ...

            // 回数券を1減らす（サーバーサイドでの減算も行う必要があります）
            {{ $ticket->remaining_tickets }}--;
        }
    </script> --}}

</x-app-layout>
