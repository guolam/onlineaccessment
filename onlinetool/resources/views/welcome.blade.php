<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="icon" href="/logo/logo.jpg" type="image/png">
    <link rel="apple-touch-icon" sizes="100x100" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <meta name="google-site-verification" content="sa58v-2wIIK_uumu6QePQTmJHV3svCW9DvRcLgM1Vvs" />
    <meta name="description"
        content="今の実力を15分で測定。株式会社OnLine X 九州産業大学産学連携プロジェクトから開発したアセスメントツール。ご自身のビジネス力を可視化し、どれくらいのビジネス力があるのかを知ることができます。">
    <meta name="keywords" content="ビジネス診断, アセスメントツール, 株式会社OnLine, 大人の非認知能力">
    <title>株式会社OnLine | ビジネス力診断</title>
</head>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-WV5FXSYXJJ"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-WV5FXSYXJJ');
</script>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">

            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="https://recurrent-edu.jp/"><x-application-logo-w
                        class="w-12 h-12 fill-current text-gray-500" />

                </a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">

                @if (Route::has('login'))
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                        @auth
                            <li class="flex items-center">
                                <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                    href="{{ url('/dashboard') }}">ダッシュボード</a>
                            </li>
                        @else
                            <li class="flex items-center">
                                <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                    href="{{ route('login') }}">ログイン</a>
                            </li>

                        @endauth
                @endif
            </div>
    </nav>
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('{{ asset('assets/img/hero.jpg') }}');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="px-5">
                            <h1 class="text-white font-bold text-5xl mt-12" style="white-space: nowrap;">
                                今の実力を15分で測定
                            </h1>
                            <p class="mt-8 text-lg text-white" style="white-space: nowrap;">
                                <span class="text-2xl font-semibold">株式会社OnLine X 九州産業大学<br>
                                    産学連携プロジェクトから<br>開発したアセスメントツール<br>
                                    <br></span>

                                ご自身のビジネス力を可視化し、<br>
                                どれくらいのビジネス力があるのかを知ることができます。<br>
                                <br>
                                今すぐ診断をして、あなたのビジネス力を知りましょう！<br>
                                今だけ<strong>550円(税込)</strong>で提供いたします。
                            </p>
                        </div>
                        <div class="my-12">
                            <a href="https://onlinerevo.jp/p/r/pr5z7nvc"
                                class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-4 px-5 rounded">
                                今すぐ申し込む
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="bg-sky-100 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-sky-100 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award fa-2x" style=""></i>
                                </div>
                                <h6 class="text-xl font-semibold text-red-400">適切なキャリア選択のサポート</h6>
                                <p class="mt-2 mb-4 text-gray-600 text-left">
                                    自己理解が深まることで、個人のスキル、興味、価値観に合ったキャリアパスを選択する際により良い判断が可能となります。ツールの結果を通じて、ビジネスパーソンは自身の強みや弱みを把握し、それに基づいて将来の職業的な方向性を見極めることができるでしょう。これによって、適切な職種や業界を選択する際の迷いや失敗を減少させる助けとなります。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-retweet fa-2x"></i>
                                </div>
                                <h6 class="text-xl font-semibold text-blue-400">効果的なコミュニケーションと協力関係の構築</h6>
                                <p class="mt-2 mb-4 text-gray-600 text-left">
                                    自己理解が進むと、他人とのコミュニケーションにおいても大きな優位性を持つことができます。ビジネスパーソンが自分のコミュニケーションスタイル、意思決定方法、ストレスへの対処法を理解すれば、同僚やクライアントとの対話が円滑に進み、誤解や摩擦を減少させることができます。また、自己理解を深めることで、チーム内での協力関係の構築やリーダーシップスキルの向上にも寄与します。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-fingerprint fa-2x"></i>
                                </div>
                                <h6 class="text-xl font-semibold text-green-400">個人の成長と能力向上の促進</h6>
                                <p class="mt-2 mb-4 text-gray-600 text-left">
                                    自己理解を深めるプロセスは、個人の成長と能力向上を助ける重要なステップです。ビジネスパーソンが自分の強みや成長の余地を把握すれば、継続的な学習やスキルの向上に焦点を当てることができます。自己理解は、目標設定や自己啓発の方針を効果的に導く手助けとなり、結果として個人の職業的な成功に寄与します。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-500">
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <div class="border-b-2 border-black">
                            <h3 class="text-3xl mb-2 font-semibold leading-normal">
                                診断ツールだからこそできること
                            </h3>
                        </div>
                        <p class="text-lg font-light leading-relaxed mt-6 mb-4 text-gray-700">
                            <strong class="font-bold text-2xl">自己認識の向上:</strong><br>
                            診断ツールは個人に対して客観的な情報を提供することができます。自分自身のスキル、特性、価値観などについて深く理解することで、自己認識が向上します。これにより、自分の強みと弱みを把握し、自身のキャリア目標に合わせて成長戦略を立てることができます。
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            <strong class="font-bold text-2xl">効果的なパーソナルブランディング:</strong><br>
                            ビジネス環境では、個人のブランドイメージが重要です。診断ツールの結果を活用することで、自身の強みや特徴を明確にし、他人とのコミュニケーションやキャリア展望を効果的に伝えることができます。これにより、自己アピールが向上し、プロフェッショナルな印象を残すことができます。
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            <strong class="font-bold text-2xl">適切な成長戦略の策定:</strong><br>
                            診断ツールによって得られるデータや洞察は、個人の成長戦略の策定に役立ちます。自身のスキルや特性の分析に基づいて、どの分野でスキルを向上させるべきか、どのようなトレーニングや学習が適しているかを把握できます。これにより、効果的なスキルアッププランを立て、職業的な成長を促進することが可能です。

                            これらのポイントを活かして、ビジネスパーソン向けの診断ツールを開発し、個人の自己理解とキャリアの向上に貢献することができるでしょう。
                        </p>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">
                            <a href="{{ route('login') }}">
                                今すぐ診断&nbsp;<iconify-icon icon="uil:angle-right-b" style="color: #fff;"></iconify-icon>
                            </a>
                        </button>

                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-wordss w-full mb-6 shadow-lg rounded-lg bg-blue-400">
                            <img alt="hero" src="{{ asset('/assets/img/tool.jpg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4 bg-blue-400">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-blue-400 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    自己認識の進化をサポートする診断ツール
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    私たちの診断ツールは、ビジネスパーソンの皆様が客観的な視点から自己を見つける手助けをします。自己理解を深めることは、成功への道を切り開く重要な一歩です。ツールを使うことで、あなたのスキル、特性、価値観が明らかになり、自己ブランディングやキャリア計画の戦略立案に役立ちます。<br>

                                    個々の強みと課題を客観的に把握することで、適切な成長戦略を見つけることができます。他者とのコミュニケーションが円滑になり、リーダーシップスキルが向上することで、ビジネスの成功に寄与します。ツールを活用して、今後の道を明確にし、自己成長の旅を効果的にサポートしましょう。
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20 pb-36 bg-slate-50">
            <div class="container mx-auto px-4 ">
                <div class="flex flex-wrap justify-center text-center mb-12">
                    <div class="w-full lg:w-6/12 px-6">
                        <h2 class="text-3xl font-semibold mb-6 leading-normal text-blue-500">アセスメントツールを通して<br>
                            ビジネス力を数字化します
                        </h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                            レダーチャートで、自分のビジネス力を可視化にし、<br>
                            各項目の詳細、点数を知ることができます。
                            <br>
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full mb-12 px-4">
                        <div class="px-5">
                            <img alt="株式会社OnLineアセスメントツール内容" src="{{ asset('/assets/img/pic1.png') }}"
                                class="shadow-lg  max-w-full mx-auto" style="max-height:900px;" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="{{ asset('/assets/img/school_business.jpg') }}" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">

                            <h3 class="text-3xl font-semibold">株式会社OnLine X 九州産業大学</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                <strong clss="text-bold">■アセスメントツールの詳細</strong><br>
                            </p><br>
                            ＜特徴＞ <br>
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3"><i
                                                    class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                4つの分野、7項目にわけてビジネスパーソンのビジネス力を測定
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-200 mr-3"><i
                                                    class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">自分の長所・短所を可視化</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-200 mr-3"><i
                                                    class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                当社と九州産業大学商学部聞間研究室により、ビジネス、経営での知見とを統計的に測定し、診断結果によって、当社からの目標達成に向かうアドバイス付き
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <br>
                            アセスメントツールのアドバイスは、九州産業大学商学部教授 聞間 理氏が担当、統計のアドバイスは、九州産業大学基礎教育センター講師 中世古 貴彦氏が担当。<br>

                            <br> <strong class="text-bold">■株式会社OnLineについて</strong>
                            <br>

                            「リカレント教育をスタンダードにし、教育格差の解消に挑む」をミッションとし当社が運営するビジネススクールでは主にコーチング、セールスコミュニケーション、目標達成の技術を提供し、短期間でビジネス力をあげて、どこでも通用するビジネスパーソンを輩出します。講座内では、目標達成能力、コミュニケーション能力や問題解決能力などいわゆる『非認知能力』と言われる能力が総じて高まっていることを背景に、2022年には太宰府市立学業院中学校で「仕事」をテーマとした進路学習のサポートも実施している。

                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
    <footer class="relative bg-blue-500 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blue-500 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="mt-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"><a href="https://recurrent-edu.jp/"> <i
                                    class="flex fa fa-home"></i></a></button>
                        <button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"><a href="https://www.facebook.com/online.co.ltd">
                                <i class="flex fab fa-facebook-square"></i></a></button>
                        <button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"><a href="https://www.youtube.com/channel/UCpf1g6oUE_xySAcN4G1A_Xw">
                                <i class="flex fab fa-youtube"></i></button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="w-full lg:w-4/12 px-4">

                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://recurrent-edu.jp/law/" style="white-space: nowrap;">特定商取引法に基づく表記</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://recurrent-edu.jp/privacy/">個人情報保護方針</a>
                            </li>
                            <li>
                                <a class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://recurrent-edu.jp/terms/">免責事項・利用規約</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-white" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-white font-semibold py-1">
                    Copyright © 2023
                    <a href="https://recurrent-edu.jp/" class="text-white hover:text-slate-200">OnLine Inc.
                    </a>.
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }
    </script>
</body>

</html>
