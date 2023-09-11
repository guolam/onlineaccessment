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
        
        $attributeDescriptions = [
            'Problemsolving' => [
                'excellent' => '＜問題解決力の高い人の特徴＞<br>
①分析力（Analytical Skills）<br>
問題を細かく分析し、根本的な原因や影響を理解する能力が高いです。客観的な視点から情報を収集し、問題の本質を把握することができます。<br><br>

②クリティカルシンキング（Critical Thinking）<br>
論理的な思考や推論を用いて、さまざまな解決策の懸念や欠点を評価する能力が高いです。客観的な判断を下し、最適な選択をすることができます。<br><br>

③創造性（Creativity）<br>
新しいアイデアやアプローチを提案し、想像力を活用して問題に取り組む能力が高いです。異なる視点から問題を捉え、革新的な解決策を見つけることができます。<br><br>

④実行力（Execution） : 見つけた解決策を実際に行動に移す能力が高く、計画を立て、行動を起こすことで、問題解決の成果を実現します。<br>
',
                'normal' => '＜問題解決力の平均的な人の特徴＞<br>
①論理的な思考と創造性のバランス<br>
平均的な人は、論理的に問題を分析する能力と、新しいアイデアや考え方を考える創造性のバランスを良く持っています。新たな発想や視点を取り入れることで、状況に対応します。<br><br>

②情報収集と評価<br>
平均的な人は、問題に対する情報を収集し、それを評価するスキルを持っています。必要な情報を収集し、信頼性や重要性を評価することで、本質的な判断と解決策の選択が可能です。<br><br>

③計画と実行<br><br>
平均的な人は、問題解決のプロセスを計画的に進め、それを実行に移す能力を持っています。解決策を選択した後も、正しい手順を立てて実行することで、問題解決の効果的な実行が可能です。<br><br>
',
                'poor' => '＜問題解決力の低い人の特徴＞<br>
①固定的な思考パターン<br>
問題解決力が低い人は、一度のアプローチや固定的な思考パターンに慎重な傾向があります。これによって、柔軟性に欠けた解決策が導かれる可能性があります。<br><br>

②詳細な分析の不足<br>
問題解決力の低い人は、問題の根本的な原因や問題を適切に分析することが難しい場合があります。表面的な情報なので、問​​題の本質を見ることができません。結果として、一時的な解決策や対症療法的なアプローチが支配的になることがあります。<br><br>

③偏見傾向<br>
問題に直面した際に、困難な状況を避けようとする傾向が見られることがあります。成長の機会を逃すことがあり、ストレスや不安を感じる可能性もあります。<br>
',
            ],
            'Resilience' => [
                'excellent' => '＜精神回復力の高い人の特徴＞<br>
①ストレス耐性<br>
困難な状況やプレッシャーに対して耐性を持っています。冷静な判断力をもとに、慎重に感情をコントロールできます。<br><br>

②前向きな思考<br>
困難に対して、前向きな視点を認めることができます。失敗を学ぶ機会と捉え、困難な状況を克服するための前向きな方法を見つけようと努力します。<br><br>

③ソーシャルサポートの活用<br>
友人や家族、同僚などのサポートを受けることができます。他人とのつながりを大切にし、助け合いながら困難を乗り越えることができます。<br><br>
',
                'normal' => '＜精神回復力の平均的な人の特徴＞<br>
①適切なストレス管理<br>
平均的な人は、ストレスや圧力がある状況でも、適切な範囲でその影響に対処する能力を持っています。正しいストレス管理方法を使って心理的な平衡を保つことができます。<br><br>

②感情の調整<br>
平均的な人は、さまざまな感情を正しく認識し、それぞれに対処する方法を見つけることができます。感情のバランスを慎重に、ポジティブな感情を育て、ネガティブな感情を扱う方法を知っています。<br><br>

③挫折からの回復<br>
平均的な人は、失敗や挫折から立ち直る能力を持っています。これにより、自信を持って困難な状況に対処し、成長と学習を促進します。<br><br>
',
                'poor' => '＜精神回復力の低い人の特徴＞<br>
①否定的な思考パターン<br>
精神的な回復力が低い人は、否定的な思考パターンに陥りがちです。<br><br>

②ストレスへの過敏な反応<br>
困難な状況やストレスが発生すると、過剰に敏感に反応することがあります。これにより、感情的に不安定になり、うつ症状が悪化する可能性があります。<br><br>

③孤独感と社会的孤独<br>
精神回復力が低い人は、社会的なつながりを築くことが難しい場合があります。孤独感が進むと、精神的な健康に悪影響を及ぼす可能性があります。<br><br>

これらの特徴は、個人ごとに異なる程度で現れます。しかし、精神的な回復力を高めるためには、前向きな思考の培養、ストレス管理スキルの向上、そして社会的なつながりの構築が重要です。<br><br>
',
            ],
            'Problemfocus' => [
                'excellent' => '＜問題焦点型で考える人の特徴＞<br>
①主要な課題に集中する<br>
問題焦点型の人は、複雑な状況や課題でも、落ち着いて主要な課題や目標に集中することができ、効果的なアプローチを考えることができます。<br><br>

②冷静な分析と優先順位付け<br>
問題焦点型の人は、感情的な影響を極力抑えつつ、事実に基づいた冷静な分析を行います。課題を小さな要素に分解し、それぞれの重要性や影響を評価して優先順位を付けることが得意です。<br><br>

③解決策の選択と実行<br>
問題焦点型の人は、複数の解決策の中から最適なものを選び、迅速に行動に移す能力があります。それによって、問題の解決に向けて効果的に進めることができます。<br><br>

',
                'normal' => '普通',
                'poor' => '＜問題焦点型で考えない人の特徴＞<br>
①細部にこだわり過ぎる<br>
問題焦点型でない人は、重要でない部分に集中してしまい、気を取られる傾向があります。<br><br>

②感情に左右される<br>
問題焦点型でない人は、感情が判断に影響を与える可能性があります。 怒りや不安などの感情が優先され、客観的な分析ができなくなることがあります。<br><br>

③決断が苦手<br>
決断を下すことに時間がかかることがあります。複数の選択肢や情報に囲まれていると、どの選択肢が最適かを考えたり、完璧を求めたりする傾向があるため、すべての情報を考えるまで決断を遅らせることがあります。その結果、重要な意思決定が遅れ、チャンスを逃してしまう可能性があります。<br><br>
',
            ],
            'Timeperspective' => [
                'excellent' => '＜過去思考の人の特徴＞<br>
①過去への執着<br>
過去の思考の人は、過去の出来事や経験に強い感情的な衝撃を受けることがあります。<br><br>

②反省と学習<br>
過去思考する人は、過去の行動や選択肢について深く反省し、そこから学ぶことを重視します。過去のミスを読まないようにするために、自己に向けた努力を惜しまない傾向があります。<br><br>

③歴史的な洞察力<br>
過去思考の人は歴史や文化に対して興味が強く、過去の出来事や傾向を分析することで、現代の課題や傾向を理解しようとします。<br><br>
',
                'normal' => '＜現在思考の人の特徴＞<br>
①現在重視<br>
現在思考の人は、今この瞬間を大切にし、その瞬間の喜びと充実感を追求します。過去や未来に進むことなく、現在の状況に焦点を当てる傾向があります。<br><br>

②即興性と柔軟性<br>
現在思考の人は、柔軟で即興的な能力に優れていることがあります。 新しい状況に適応し、臨機応変に対処することが得意で、変化に対する抵抗力が低い傾向があります。<br><br>

③メンタルプレゼンス<br>
現在思考の人は、マインドフルネスや瞑想などのプラクティスを育て、自分自身とのつながりに関心を持つことがあります。自己認識を高め、ストレスや不安を軽減するために取り組むことがあります。<br><br>
',
                'poor' => '＜未来志向の人の特徴＞<br>
①目標設定と計画<br>
未来志向の人は、自分の将来の目標を明確に設定し、それを達成するための計画を立てることに熱心です。<br><br>

②新しい可能性への探求<br>
未来志向の人は、常に新しいアイデアや可能性を追求します。変化や進化を目指しており、新しい技術やトレンドに敏感です。<br><br>

③リーダーシップと影響力<br>
未来志向の人は、自分のビジョンやアイデアを他人に伝え、影響力を持つことに熱心です。リーダーシップの知恵を発揮し、周囲の人々を巻き込んで変革を進める力を持っています。<br><br>
',
            ],
            'Selfesteem' => [
                'excellent' => '＜自己肯定感の高い人の特徴＞<br>
①自己受容とポジティブな評価<br>
自己肯定感の高い人は、自分自身を受け入れ、過去の失敗や欠点に対しても厳しさを持たず、ポジティブな側面を見つけることができます。自己を正しく評価し、自分の強みや成果に自信を持っています。<br><br>

②挑戦への積極的な姿<br>
自己肯定感の高い人は、新しい挑戦や困難な状況に対しても積極的な姿勢を持ちます。失敗を恐れず、成長の機会として認識できます。そのため、新しいスキルを学び、自己成長を達成しやすいです。<br><br>

③他人との健全な競争<br>
自己肯定感の高い人は、他人との競争をポジティブな刺激と捉える傾向があります。自分を高めるために他人と競い合うことで、刺激を受け、成長の機会として恐れることができます。<br>',
                'normal' => '＜自己肯定感の平均的な人の特徴＞<br>
①正しい自己評価<br>
平均的な人は、自分の能力や価値を正しく評価する傾向があります。自己の強みと弱点を客観的に認識し、自己評価をバランス良く認めることができます。<br><br>

②失敗への対処<br>
平均的な人は、失敗やミスを否定的に相対的に、それを成長の場と褒めることができます。失敗しても自己価値を揺るがさず、前向きに頑張り続けることができます。<br><br>

③他人との比較のバランス<br>
平均的な人は、他人と比較することを建設的な観点で行うことができ、共感や刺激を受けて自分自身を向上させる努力をしようとします。<br><br>
',
                'poor' => '＜自己肯定感の低い人の特徴＞<br>
①自己比較と競争<br>
自己肯定感が低い人は、他人と比較して自分を劣っていると感じることがよくあります。他人の成功や幸福を見て、自分を貶めてしまうこともあります。過度な自己比較は、自分自身の評価をますます下げてしまう結果につながることがあります。<br><br>

②内向的な傾向<br>
自己肯定感が低い人は、自分を隠す傾向があります。他人との交流を避け、社交的な場面で不安や緊張を感じることが多いです。人間関係の見通しや自己表現の方法を学ぶ機会を逃してしまう可能性があります。<br><br>

③自己否定のループ<br>
自己肯定感が低い人は、自分を否定的に評価する思考パターンに陥りやすいです。これにより、マイナスのフィードバックループが生まれ、心の健康や自己成長に悪影響を及ぼす可能性があります。<br><br>
',
            ],
            'Selfunderstand' => [
                'excellent' => '＜自己認識力の高い人の特徴＞<br>
①内省的な傾向<br>
自己認識力の高い人は、定期的に自分自身や自分の行動、感情について内省します。<br><br>

②フィードバックへの開放性<br>
高い自己認識力を持つ人々は、他人からのフィードバックを歓迎し、成長の機会と捉えます。 彼らは自分の欠点や改善点を受け入れることができ、それを前向きな変化につなげようと思います。<br><br>

③感情の認識と自己管理<br>
自己認識力の高い人は、自分の感情を正確に認識し、正しく管理する能力を持っています。<br><br>',
                'normal' => '＜自己認識力の平均的な人の特徴＞<br>
①自己評価の現実的さ<br>
平均的な人は、自分の強みや弱点を比較的現実的に評価する傾向があります。自己評価を持つこともなく、逆に過小評価しすぎることも少ないです。<br><br>

②他人との関わり<br>
平均的な人は、一般的に他人との関わりを大切にし、社会的つながりを築くことに価値を置く傾向があります。支えを求めたり提供したりすることが一般的です。<br><br>

③変化への適応力<br>
平均的な人は、一般的な日常の変化や新しい状況に対して適応する能力を持っています。新しい状況や環境に遭遇した際に、適切なレベルの柔軟性と対応力を発揮し、新たな挑戦に対抗します。<br><br>
',
                'poor' => '＜自己認識力の低い人の特徴＞<br>
①自己評価の歪み<br>
自己認識力の低い人は、自分の能力や特性を過大または過小評価することがあります。<br><br>

②他人への非適応<br>
自己認識力が低い人々は、自分自身や自分の行動を他人の視点で理解しようとすることが少ない傾向があります。そのため、他人との関係において摩擦が生じることがあります。<br><br>

③フィードバックの拒否<br>
自己認識力が低い人は、自分を批判するようなフィードバックを受け入れるのが難しい場合があります。<br><br>
',
            ],
            'Communication' => [
                'excellent' => '＜コミュニケーション力の高い人の特徴＞<br>
①傾聴力が高い<br>
高いコミュニケーション力を持つ人は、相手の話や意見を聞き、共感しようと努力します。相手の言葉だけでなく、感情やニュアンスも理解しようとします。<br><br>

②正しい非言語コミュニケーション<br>
ジェスチャー、表情などの非言語コミュニケーションを使いこなす人は、自分の意図する姿勢や感情を効果的に伝えることができます。相手の反応を見ながらコミュニケーションを調整する能力も持っています。<br><br>

③明確で適切な表現<br>
複雑なアイデアや感情を使いやすい言葉で表現する能力があります。<br><br>
',
                'normal' => '＜コミュニケーション力の平均的な人の特徴＞<br>
①正しい情報伝達<br>
平均的な人は、自分の意見や考えを明確に伝えることができ、相手の意見や感情にも耳を傾けることができます。コミュニケーションが一方的でなく、双方向の対話ができるため、コミュニケーションのバランスが取れています。<br><br>

②共感と理解<br>
平均的な人は、他人の感情や視点を理解しようとする姿勢を持っています。相手の立場や感情に共感し、正しい表現でその先に示すことができます。 信頼感を感じ、良好な人間関係を維持することができます。<br><br>

③役割意識<br>
協力的なチーム内での役割に積極的な姿勢をとります。他人と協力して共通の目標を達成しようとする努力があり、自分の意見やスキルを正しく提供しつつ、他人の意見や貢献も尊重します。チームメンバーとのコミュニケーション、効果的な協力関係を築くことができます。<br><br>
',
                'poor' => '＜コミュニケーション力の低い人の特徴＞<br>
①話を遮る<br>
コミュニケーション力が低い人は、相手の話を遮ったり、自分の意見や話題を話しすぎたりすることがあります。これにより、相手が無視されたり不快な思いをする可能性があります。<br><br>

②傲慢な自己主張<br>
コミュニケーション力が低い人は、自分の意見や経験をひたすら強調する傾向があります。これが原因で、相手との対話が対立したり摩擦になることが起こります。<br><br>

③フィードバックの不足<br>
コミュニケーション力が低い人は、適切なフィードバックを提供することが難しい場合があります。これにより、相手が成長する機会を逃したり、関係性が希薄になる可能性があります。<br><br>
',
            ],
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


        <div class="container mx-auto mt-8 px-4">
            <h2 class="text-xl font-semibold mb-4">結果</h2>

            <!-- 携帯表示用のコード -->
            <div class="sm:hidden">
                <div class="bg-white rounded-lg overflow-x-auto accordion container">
                    @foreach ($result as $index => $array)
                        <div class="mb-4 accordion-item border rounded-lg shadow-md">
                            <div class="accordion-header text-gray-600">
                                <div class="accordion-title">{{ $date[$index] }}</div>
                                <div class="accordion-button">
                                    <span class="material-symbols-outlined">
                                        expand_circle_down
                                    </span>
                                </div>
                            </div>
                            <div class="accordion-content accordion-hidden text-gray-800 ">
                                @foreach ($attribution as $name)
                                    <div class="accordion-item py-1">
                                        <div class="flex">
                                            <div class="w-2/3">{{ $kanjiNames[$name] }}:</div> <!-- 列1 -->
                                            <div class="w-1/3 text-right">
                                                {{ number_format($array[$loop->index], 1) }}／5.0</div> <!-- 列2 -->
                                        </div>
                                    </div>
                                @endforeach
                                <div>
                                    <a href="{{ route('analysis', ['count' => $index + 1]) }}"
                                        class="text-blue-500 hover:underline py-5">
                                        分析結果
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- PC表示用のコード -->
            <div class="hidden sm:block">
                <div class="bg-white rounded-lg shadow-md overflow-x-auto accordion container">

                    <table class="w-full table-auto">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-2 sm:px-4 text-left text-sm">日付</th>
                                @foreach ($attribution as $name)
                                    <th class="py-2 px-2 sm:px-4 text-left text-sm">{{ $kanjiNames[$name] }}</th>
                                @endforeach
                                <th class="py-2 px-2 sm:px-4 text-left text-sm">分析</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($result as $index => $array)
                                <tr>
                                    <td class="py-2 px-2 sm:px-4">{{ $date[$index] }}</td>
                                    @foreach ($array as $average)
                                        <td class="py-2 px-2 sm:px-4">{{ number_format($average, 1) }}／5.0</td>
                                    @endforeach
                                    <td class="py- px-2 sm:px-4">
                                        <a href="{{ route('analysis', ['count' => $index + 1]) }}"
                                            class="text-blue-500 hover:underline">
                                            分析結果
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="container mx-auto mt-8 px-4">
            <h2 class="text-xl font-semibold mb-4">各項目の詳細</h2>
            <div class="sm:hidden">
                <!-- 携帯表示用のコード -->
                @foreach ($attribution as $index => $name)
                    <div class="accordion-item border rounded-lg shadow-md mb-4">
                        <div
                            class="accordion-header px-4 py-3 bg-gray-100 cursor-pointer flex items-center justify-between">
                            <h2 class="accordion-title text-lg font-semibold">{{ $kanjiNames[$name] }}</h2>
                            <button class="accordion-button" aria-expanded="false">
                                <span class="material-symbols-outlined">
                                    expand_circle_down
                                </span>
                            </button>
                        </div>
                        <div class="accordion-content px-4 py-3">
                            <table class="table-auto w-full">
                                <tbody class="accordion container">
                                    @foreach ($result as $resultIndex => $array)
                                        <div class="accordion-header cursor-pointer">
                                            <div class="flex items-center justify-between">
                                                <div>{{ $date[$resultIndex] }}</div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="text-right"> <!-- text-rightクラスを追加 -->
                                                    <div>
                                                        点数: {{ number_format($array[$index], 1) }}／5.0
                                                    </div>
                                                </div>
                                            </div>&nbsp;
                                            <div class="accordion-button">
                                                <span class="material-symbols-outlined">
                                                    expand_circle_down
                                                </span>
                                            </div>
                                        </div>
                        </div>
                        <div class="accordion-content accordion-hidden text-gray-800">
                            @if ($array[$index] > 3)
                                {!! $attributeDescriptions[$name]['excellent'] !!}
                            @elseif ($array[$index] > 2)
                                {!! $attributeDescriptions[$name]['normal'] !!}
                            @else
                                {!! $attributeDescriptions[$name]['poor'] !!}
                            @endif
                        </div>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        @endforeach
        </div>


        <div class="hidden sm:block">
            <!-- PC表示用のコード -->
            @foreach ($attribution as $index => $name)
                <tr>
                    <td colspan="3" class="border-t border-gray-200"></td>
                </tr>
                <div class="accordion-item border rounded-lg shadow-md mb-4">
                    <div
                        class="accordion-header px-4 py-3 bg-gray-100 cursor-pointer flex items-center justify-between">
                        <h2 class="accordion-title text-lg font-semibold">{{ $kanjiNames[$name] }}</h2>
                        <button class="accordion-button" aria-expanded="false">
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>
                    </div>
                    <div class="accordion-content px-4 py-3">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="table-header">日付</th>
                                    <th class="table-header">点数</th>
                                    <th class="table-header">詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $resultIndex => $array)
                                    <tr>
                                        <td colspan="3" class="border-t border-gray-200"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-cell w-2/12">{{ $date[$resultIndex] }}</td>
                                        <td class="table-cell w-1/12">{{ number_format($array[$index], 1) }}／5.0</td>
                                        <td class="table-cell w-9/12">
                                            <div class="accordion-content-detail">
                                                @if ($array[$index] > 3)
                                                    {!! $attributeDescriptions[$name]['excellent'] !!}
                                                @elseif ($array[$index] > 2)
                                                    {!! $attributeDescriptions[$name]['normal'] !!}
                                                @else
                                                    {!! $attributeDescriptions[$name]['poor'] !!}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>


        </div>

        </div>

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="{{ asset('/assets/css/result.css') }}" />

        <style>
            @media (max-width: 767px) {
                .sm:hidden {
                    display: none !important;
                }
            }
        </style>
        <script>
            // $result $attribution を取得
            let result = @json($result ?? null);
            let attribution = @json($attribution ?? null);
            let date = @json($date ?? null);
            let datasetsArray = [];

            const colorPalette = [
                '#FF6384', // 赤
                '#36A2EB', // 青
                '#FFCE56', // 黄
                '#4BC0C0', // 緑
                '#9966FF', // 紫
                '#FF9F40', // オレンジ
                '#00BFFF', // 空色
                // 他の色を追加...
            ];


            for (let i = 0; i < result.length; i++) {
                const borderColor = colorPalette[i % colorPalette.length]; // カラーパレットから選択
                const backgroundColor = `${borderColor}33`; // 透明度を設定
                datasetsArray.push({
                    label: `${date[i]}`,
                    data: result[i],
                    borderColor: borderColor,
                    backgroundColor: backgroundColor
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
                    elements: {
                        line: {
                            borderWidth: 2,

                        },
                        point: {
                            radius: 3, // ポイントの大きさ
                            borderWidth: 4,
                            backgroundColor: 'rgba(255, 99, 132, 1)',
                            borderColor: '#fff',
                        },
                    },
                    scales: {
                        r: {
                            suggestedMin: 0,
                            suggestedMax: 5,
                            grid: {
                                color: 'rgba(50, 50, 50, 0.2)',
                                borderWidth: 0.1,
                            },
                            angleLines: {
                                color: 'rgba(50, 50, 50, 0.3)',
                                lineWidth: 1.5,
                            },
                            pointLabels: {
                                fontSize: 20,
                                fontColor: 'rgba(50, 50, 50, 1)',
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },

                }
            });

            // 新しいラベルの配列
            const newLabels = ['問題解決力', 'レジリエンス', '問題焦点型', '時間的展望', '自己肯定感', '自己認知', 'コミュニケーション力'];
            radarChart.data.labels = newLabels;
            // チャートを再描画する
            radarChart.update();

            document.addEventListener("DOMContentLoaded", function() {
                const accordionHeaders = document.querySelectorAll(".accordion-header");
                accordionHeaders.forEach(function(header) {
                    header.addEventListener("click", function() {
                        this.classList.toggle("active");
                        const content = this.nextElementSibling;
                        if (content.style.display === "block") {
                            content.style.display = "none";
                        } else {
                            content.style.display = "block";
                        }
                    });
                });
            });
        </script>
    </body>


</x-app-layout>
