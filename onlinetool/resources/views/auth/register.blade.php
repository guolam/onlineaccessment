<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-WV5FXSYXJJ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-WV5FXSYXJJ');
        </script>
        <div class="my-5 ml-12 mr-12">
            <div class="bg-gradient-to-r from-blue-200 to-blue-100 p-4 rounded-lg shadow-md">
                <p class="text-blue-800 text-sm mb-4">
                    こちらのフォームよりご登録ください。<br>
                    登録すると診断結果が保存され、<br>
                    いつでもご確認できます。</p>
                <p class="text-blue-800 text-sm font-semibold mb-2">
                    そして、仕様上パスワードの再発行はできませんので、必ずご使用されたメールアドレスとパスワードを控えてください。
                </p>
                <input type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">確認済み
                </label>

            </div>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('お名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード（8桁以上の英数字）')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード確認')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <input type="hidden" name="admin" value="{{ $admin }}">


        <div class="flex items-center justify-end mt-4">


            <div class="my-2">
                <a href="{{ route('login') }}"
                    class="bg-blue-500 hover:bg-blue-900 items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">
                    {{ __('すでに登録された方はこちら') }}&nbsp;
                    <iconify-icon icon="gis:arrow" style="color: white;"></iconify-icon>
                </a>
            </div>

            <div class="my-2">
                <x-primary-button class="ml-4"> <!-- w-32 はボタンの幅を示します。適宜調整してください。 -->
                    {{ __('登録') }}
                </x-primary-button>
            </div>
        </div>

        <div class="my-5">
            <label class="flex items-center">
                <span class="text-sm">
                    <a href="https://recurrent-edu.jp/terms/" class="text-blue-500">利用規約</a>
                    ・
                    <a href="https://recurrent-edu.jp/privacy/" class="text-blue-500">個人情報保護方針</a>
                    に同意した方のみ診断をスタートしてください。
                </span>
            </label>
        </div>
    </form>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</x-guest-layout>
