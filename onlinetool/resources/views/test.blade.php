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
        @if ($questions)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5 mb-2 mx-4 md:mx-0">
                <div class="mb-2 mx-auto md:mx-0 md:text-center">
                    <x-image.time class="mx-auto mb-2" />
                    <p class="text-center">0分以内に完成してください</p>
                </div>

                <div class="mb-2 mx-auto md:mx-0 md:text-center">
                    <x-image.chokan class="mx-auto mb-2" />
                    <p class="text-center">直感で回答してください。</p>
                </div>

                <div class="mb-2 mx-auto md:mx-0 md:text-center">
                    <x-image.onetime class="mx-auto mb-2" />
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
                    <div class="center-align my-5">
                        <button id="submitButton" class="button center-align hidden">送信</button>
                    </div>

                    {{-- <div class="center-align">
            <button id="answerButton" @if ($ticket->remaining_tickets > 0) onclick="submitAnswer()" @else disabled @endif>
                テストボタン
            </button>
        </div> --}}

                </form>
            @endauth
        @else
            <div>3回までしか回答できません。</div>
        @endif

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
