<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            管理者のダッシュボード
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-white">管理者のダッシュボード</h1>
                    {{ __('お帰りなさい') }}

                    <div>{{ Auth::user()->name }}さん</div>


                    {{-- $register_urlをコピーするボタン --}}
                    <div class="mt-4">
                        <x-input-label for="register_url" :value="__('ユーザー登録用URL')" />
                        <div class="flex">
                            <x-text-input id="register_url" class="block mt-1 w-full" type="text" name="register_url"
                                :value="$register_url" required autofocus autocomplete="register_url" readonly />
                            <x-primary-button class="ml-3" onclick="copyToClipboard()">
                                {{ __('コピー') }}
                            </x-primary-button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function copyToClipboard() {
            var copyTarget = document.getElementById("register_url");
            copyTarget.select();
            document.execCommand("Copy");
            alert("コピーしました！");
        }
    </script>
</x-app-layout>
