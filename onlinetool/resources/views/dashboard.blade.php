<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ホーム') }}
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
    </body>
</x-app-layout>
