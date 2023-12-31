<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Adminのダッシュボード
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-white">Adminのダッシュボード</h1>
                    {{ __("You're logged in!") }}
                    {{-- $register_urlをコピーするボタン --}}
                    <div class="mt-4">
                        @foreach ($users as $user)
                            <div class="flex">
                                <a href="{{ route('admin.result', ['user_id' => $user->id]) }}">
                                    {{ $user->name }}
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
