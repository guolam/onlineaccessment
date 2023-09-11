<style>
    /* アコーディオンのスタイル */
    .accordion {
        background-color: #f1f1f1;
        color: #333;
        cursor: pointer;
        padding: 10px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: background-color 0.3s ease;
    }

    .panel {
        display: none;
        padding: 10px;
        background-color: white;
        border: 1px solid #ccc;
    }

    /* アクティブなアコーディオンのスタイル */
    .active {
        background-color: #ddd;
    }
</style>

<x-app-layout>
    <div class="p-4 bg-gray-100">
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <p class="text-center text-lg font-semibold">アセスメントツール測定能力の定義</p>

            <div class="mt-4">

                <div class="mt-2">
                    <h3 class="text-lg font-semibold">
                    </h3>
                    <p class="text-sm">(各項目をクリックして、詳細表示)
                    </p>

                    {{-- 自己認識 --}}
                    <div class="mt-2">

                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>自己認識（Self-awareness）</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>
                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">自己認識（Self-awareness）とは？</strong>
                                    <p class="my-2">
                                        自分の感情や思考、行動を把握し、自分自身を客観的に見つめる能力。自分の強みや弱みを認識し、自分自身を評価できる能力を含む。また、周囲から自分がどのように思われているか、ということの認識も含む。
                                    </p>
                                    <ul>
                                        <li class="my-2">
                                            <strong>①感情の認識</strong>
                                            自己認識は、自分自身の感情を認識し、名前を付け、それがどのように自分の行動や判断に影響を与えるかを考慮することから始めます。
                                        </li>
                                        <li class="my-2">
                                            <strong>②自己評価</strong>
                                            自己認識には、自分自身の強みや弱点、スキル、価値観などに対する評価が含まれます。
                                        </li>
                                        <li class="my-2">
                                            <strong>③自己理解</strong>
                                            自己認識は、自分自身の考え方や信念、態度、行動の傾向を理解することも含まれます。
                                        </li>
                                        <li class="my-2">
                                            <strong>④成長と変化の認識</strong>
                                            自己認識は、時間とともに自己が成長し変化することを認識する能力も含まれます。
                                        </li>
                                    </ul>
                                    <p class="my-2">
                                        自己認識は、個人の発達と幸福感において重要な要素です。自分自身を冷静に受け入れることで、自信や自己肯定感の向上、人間関係の向上、ストレスの軽減、目標の達成などが促進される事があります。
                                    </p>
                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">自己認識力の高い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①内省的な傾向</strong>
                                        <li class="my-2">自己認識力の高い人は、定期的に自分自身や自分の行動、感情について内省します。
                                        </li>
                                        <strong class="my-3">②フィードバックへの開放性</strong>
                                        <li class="my-2">
                                            高い自己認識力を持つ人々は、他人からのフィードバックを歓迎し、成長の機会と捉えます。
                                            彼らは自分の欠点や改善点を受け入れることができ、それを前向きな変化につなげようと思います。
                                        </li>
                                        <strong class="my-3">③感情の認識と自己管理</strong>
                                        <li class="my-2">
                                            自己認識力の高い人は、自分の感情を正確に認識し、正しく管理する能力を持っています。</li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">自己認識力の平均的な人の特徴
                                    </strong>
                                    <ul>
                                        <strong class="my-3">①自己評価の現実的さ</strong>
                                        <li class="my-2">
                                            平均的な人は、自分の強みや弱点を比較的現実的に評価する傾向があります。自己評価を持つこともなく、逆に過小評価しすぎることも少ないです。
                                        </li>
                                        <strong class="my-3">②他人との関わり</strong>
                                        <li class="my-2">
                                            平均的な人は、一般的に他人との関わりを大切にし、社会的つながりを築くことに価値を置く傾向があります。支えを求めたり提供したりすることが一般的です。
                                        </li>
                                        <strong class="my-3">③変化への適応力</strong>
                                        <li class="my-2">
                                            平均的な人は、一般的な日常の変化や新しい状況に対して適応する能力を持っています。新しい状況や環境に遭遇した際に、適切なレベルの柔軟性と対応力を発揮し、新たな挑戦に対抗します。
                                        </li>
                                    </ul>


                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">自己認識力の低い人の特徴
                                    </strong>
                                    <ul>
                                        <strong class="my-3">①自己評価の歪み</strong>
                                        <li class="my-2">
                                            自己認識力の低い人は、自分の能力や特性を過大または過小評価することがあります。
                                        </li>
                                        <strong class="my-3">②他人への非適応</strong>
                                        <li class="my-2">
                                            自己認識力が低い人々は、自分自身や自分の行動を他人の視点で理解しようとすることが少ない傾向があります。そのため、他人との関係において摩擦が生じることがあります。
                                        </li>
                                        <strong class="my-3">③フィードバックの拒否</strong>
                                        <li class="my-2">
                                            自己認識力が低い人は、自分を批判するようなフィードバックを受け入れるのが難しい場合があります。
                                        </li>
                                    </ul>




                                </li>
                            </ol>
                        </div>
                    </div>

                    {{-- 自己肯定感 --}}
                    <div class="mt-2">

                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>自己肯定感（Self-esteem）</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>
                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">自己肯定感（Self-esteem）とは？</strong>
                                    <p class="my-2">
                                        自分自身に対する評価や自己評価に対する感情面。自分を受け入れ、自分に自信を持つ能力を含む。
                                    </p>
                                    <p class="my-2">
                                        自己肯定感（Self-esteem）は、自分自身を肯定的に受け入れ、自己評価を高める心の状態や能力を表します。これは、自分が持つ価値や能力に対する確信や感情を表すものです。自己肯定感が高い人は、自分を尊重し、自分の強みや成功を認識し、自信を持って行動する傾向があります。
                                    </p>
                                    <p class="my-2">
                                        自己肯定感の重要な要素には以下のようなものが含まれます。
                                    </p>

                                    <ul>
                                        <li class="my-2">
                                            <strong>①自己評価のバランス</strong>
                                            自己肯定感が高い人は、長所だけでなく、短所や欠点も受け入れることができます。
                                        </li>
                                        <li class="my-2">
                                            <strong>②成功と失敗の許容度</strong>
                                            自己肯定感が高い人は、成功したときだけでなく失敗したときも、自分の価値を認められます。失敗を学ぶ機会として捉え、前向きな態度をとります。過去の選択や行動に対してあまりに厳しくなく、自分を否定することなく認めることができます。
                                        </li>
                                        <li class="my-2">
                                            <strong>③他人との比較の制御</strong>
                                            自己肯定感が高い人は、他人と比較して自分を評価することを過度に行わない傾向があります。自分自身の成長や目標達成を重視し、他人の意見や評価に左右されずに進むことができます。

                                        </li>
                                        <li class="my-2">
                                            <strong>④価値感の確立</strong>
                                            自己肯定感が高い人は、自分自身に対して確固たる信念や自分の価値観を持っています。これにより、他人の期待や社会の評価に流されずに、自分の道を進むことができます。
                                        </li>
                                        <li class="my-2">
                                            <strong>⑤ストレス耐性の向上</strong>
                                            自己肯定感が高い人は、自分の能力に対する自信があるため、ストレスやプレッシャーに対処しやすいです。失敗や挫折が起きても、自分を受け入れることでなく前向きに対応できます。
                                        </li>
                                        <strong>⑥自己成長と目標達成</strong>
                                        自己肯定感が高いと、自分の強みや弱点を正直に認識し、成長の機会を最大限に活用できます。目標を設定し、努力を惜しまずに取り組むことで、自己実現を達成する可能性があります。
                                        <li class="my-2">
                                            <strong>⑦対人関係の構築</strong>
                                            自己肯定感が高い人は、自分を受け入れることができるため、他人との関係も円滑に進みやすくなります。
                                        </li>
                                        <li class="my-2">
                                            <strong>⑧リーダーシップの発揮</strong>
                                            自己肯定感が高い人は、自分自身を信じ、他人を鼓舞することができる傾向があります。そのため、チームや組織を効果的に導くことができます。
                                        </li>
                                        <li class="my-2">
                                        </li>
                                    </ul>
                                    <p class="my-2">
                                        自己肯定感が高いと、自信を持って新たな挑戦を行い、困難を乗り越えて成長することができます。
                                        逆に自己肯定感が低いと、自分を過小評価し、恐れや不安が行動を制限することがあります。
                                    </p>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">
                                    <strong class="my-5">自己肯定感の高い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①自己受容とポジティブな評価</strong>
                                        <li class="my-2">
                                            自己肯定感の高い人は、自分自身を受け入れ、過去の失敗や欠点に対しても厳しさを持たず、ポジティブな側面を見つけることができます。自己を正しく評価し、自分の強みや成果に自信を持っています。
                                        </li>
                                        <strong class="my-3">②挑戦への積極的な姿</strong>
                                        <li class="my-2">
                                            自己肯定感の高い人は、新しい挑戦や困難な状況に対しても積極的な姿勢を持ちます。失敗を恐れず、成長の機会として認識できます。そのため、新しいスキルを学び、自己成長を達成しやすいです。
                                        </li>
                                        <strong class="my-3">③他人との健全な競争</strong>
                                        <li class="my-2">
                                            自己肯定感の高い人は、他人との競争をポジティブな刺激と捉える傾向があります。自分を高めるために他人と競い合うことで、刺激を受け、成長の機会として恐れることができます。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">自己肯定感の平均的な人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①正しい自己評価</strong>
                                        <li class="my-2">
                                            平均的な人は、自分の能力や価値を正しく評価する傾向があります。自己の強みと弱点を客観的に認識し、自己評価をバランス良く認めることができます。
                                        </li>
                                        <strong class="my-3">②失敗への対処</strong>
                                        <li class="my-2">
                                            平均的な人は、失敗やミスを否定的に相対的に、それを成長の場と褒めることができます。失敗しても自己価値を揺るがさず、前向きに頑張り続けることができます。
                                        </li>
                                        <strong class="my-3">③他人との比較のバランス</strong>
                                        <li class="my-2">
                                            平均的な人は、他人と比較することを建設的な観点で行うことができ、共感や刺激を受けて自分自身を向上させる努力をしようとします。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">自己肯定感の低い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①自己比較と競争</strong>
                                        <li class="my-2">
                                            自己肯定感が低い人は、他人と比較して自分を劣っていると感じることがよくあります。他人の成功や幸福を見て、自分を貶めてしまうこともあります。過度な自己比較は、自分自身の評価をますます下げてしまう結果につながることがあります。
                                        </li>
                                        <strong class="my-3">②内向的な傾向</strong>
                                        <li class="my-2">
                                            自己肯定感が低い人は、自分を隠す傾向があります。他人との交流を避け、社交的な場面で不安や緊張を感じることが多いです。人間関係の見通しや自己表現の方法を学ぶ機会を逃してしまう可能性があります。

                                        </li>
                                        <strong class="my-3">③自己否定のループ</strong>
                                        <li class="my-2">
                                            自己肯定感が低い人は、自分を否定的に評価する思考パターンに陥りやすいです。これにより、マイナスのフィードバックループが生まれ、心の健康や自己成長に悪影響を及ぼす可能性があります。
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>

                    {{-- コミュニケーション力 --}}
                    <div class="mt-2">
                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>コミュニケーション力（Communication Skills）</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>

                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">コミュニケーション力（Communication Skills）とは？</strong>
                                    <p class="my-2">
                                        情報、考え方、感情、意図などを効果的に伝え、相手からの情報などを受け止める能力。
                                    </p>
                                    <p class="my-2">
                                        コミュニケーション力が高い人は、言葉だけでなく非言語的な要素も活用して、他人との間でスムーズかつ理解のある対話を築くことができます。また、相手の立場や感情に寄り添い、共感や共感を示すことが重要です。自分の意見だけでなく、相手の視点や感情に敏感になることで、対話が対等で豊かなものになります。
                                    </p>
                                    <p class="my-2">
                                        コミュニケーション力の重要な要素には以下のようなものが含まれます。
                                    </p>

                                    <ul>
                                        <li class="my-2">
                                            <strong>①聴く力（Listening Skills）</strong>
                                            相手の話に注意を払う、理解しようとする能力です。適切な質問を投げかけ、相手の立場や意見を尊重することで、信頼関係を築くことができます。
                                        </li>
                                        <li class="my-2">
                                            <strong>②表現力（Expression Skills）</strong>
                                            アイデアや情報を明確に、正しい言葉で伝える能力です。しっかりとした言葉選びや非言語コミュニケーション（ジェスチャーや表情）を活用することで、相手に理解されやすくなります。
                                        </li>
                                        <li class="my-2">
                                            <strong>③フィードバックの提供と受容</strong>
                                            建設的なフィードバックを提供し、他人からのフィードバックを受け入れる能力です。改善の留意点を見つけ、関係性を改善する手助けとなる重要な要素です。
                                        </li>
                                        <li class="my-2">
                                            <strong>④適応力（Adaptability）</strong>
                                            状況や相手に合わせてコミュニケーションスタイルを調整する能力です。異なる背景や文化を尊重し、柔軟に対応することで、合意的な対話を実現できます。
                                        </li>
                                        <li class="my-2">
                                            <strong>⑤非言語コミュニケーション（Nonverbal Communication）</strong>
                                            言葉以外の手段で情報や感情を伝える能力です。
                                            表情、ジェスチャー、姿勢、声のトーンなどで相手とのコミュニケーションを補完し、より正確なメッセージを伝えることができます
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">
                                    <strong class="my-5">コミュニケーション力の高い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①傾聴力が高い</strong>
                                        <li class="my-2">
                                            高いコミュニケーション力を持つ人は、相手の話や意見を聞き、共感しようと努力します。相手の言葉だけでなく、感情やニュアンスも理解しようとします。
                                        </li>
                                        <strong class="my-3">②正しい非言語コミュニケーション</strong>
                                        <li class="my-2">
                                            ジェスチャー、表情などの非言語コミュニケーションを使いこなす人は、自分の意図する姿勢や感情を効果的に伝えることができます。相手の反応を見ながらコミュニケーションを調整する能力も持っています。
                                        </li>
                                        <strong class="my-3">③明確で適切な表現</strong>
                                        <li class="my-2">
                                            複雑なアイデアや感情を使いやすい言葉で表現する能力があります。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">コミュニケーション力の平均的な人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①正しい情報伝達</strong>
                                        <li class="my-2">
                                            平均的な人は、自分の意見や考えを明確に伝えることができ、相手の意見や感情にも耳を傾けることができます。コミュニケーションが一方的でなく、双方向の対話ができるため、コミュニケーションのバランスが取れています。
                                        </li>
                                        <strong class="my-3">②共感と理解</strong>
                                        <li class="my-2">
                                            平均的な人は、他人の感情や視点を理解しようとする姿勢を持っています。相手の立場や感情に共感し、正しい表現でその先に示すことができます。
                                            信頼感を感じ、良好な人間関係を維持することができます。
                                        </li>
                                        <strong class="my-3">③役割意識</strong>
                                        <li class="my-2">
                                            協力的なチーム内での役割に積極的な姿勢をとります。他人と協力して共通の目標を達成しようとする努力があり、自分の意見やスキルを正しく提供しつつ、他人の意見や貢献も尊重します。チームメンバーとのコミュニケーション、効果的な協力関係を築くことができます。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">コミュニケーション力の低い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①話を遮る</strong>
                                        <li class="my-2">
                                            コミュニケーション力が低い人は、相手の話を遮ったり、自分の意見や話題を話しすぎたりすることがあります。これにより、相手が無視されたり不快な思いをする可能性があります。
                                        </li>
                                        <strong class="my-3">②傲慢な自己主張</strong>
                                        <li class="my-2">
                                            コミュニケーション力が低い人は、自分の意見や経験をひたすら強調する傾向があります。これが原因で、相手との対話が対立したり摩擦になることが起こります。
                                        </li>
                                        <strong class="my-3">③フィードバックの不足</strong>
                                        <li class="my-2">
                                            コミュニケーション力が低い人は、適切なフィードバックを提供することが難しい場合があります。これにより、相手が成長する機会を逃したり、関係性が希薄になる可能性があります。
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>

                    {{-- 精神回復力 --}}
                    <div class="mt-2">
                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>精神回復力（Resilience）</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>
                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">精神回復力（Resilience）とは？</strong>
                                    <p class="my-2">
                                        ストレスや困難な状況になった際に、柔軟に対処し、身体的、精神的な健康を維持し、前向きな態度を受け入れる能力。
                                    </p>
                                    <p class="my-2">
                                        この能力により、人々は失敗や困難を乗り越え、自己成長や幸福感を追求することができます。
                                    </p>
                                    <p class="my-2">
                                        精神回復力の重要な要素には以下のようなものが含まれます。
                                    </p>

                                    <ul>
                                        <li class="my-2">
                                            <strong>①柔軟性（Flexibility）</strong>
                                            変化や不確実性に適応し、新しい状況に対応する能力です。予期せぬ出来事に対しても、柔軟な思考と行動をとることができます。
                                        </li>
                                        <li class="my-2">
                                            <strong>②前向きなマインドセット</strong>
                                            困難な状況や失敗に対して、前向きな態度を認めることができる能力です。失敗を学びの機会と捉えることで、ポジティブな要素を見つけ、回復力を高めることができます。
                                        </li>
                                        <li class="my-2">
                                            <strong>③ストレス管理（Stress Management）</strong>
                                            ストレスを正しく認識し、正しい方法で対処する能力です。リラックス法や運動、瞑想などを活用し、ストレスの影響を軽減します。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">
                                    <strong class="my-5">精神回復力の高い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①ストレス耐性</strong>
                                        <li class="my-2">
                                            困難な状況やプレッシャーに対して耐性を持っています。冷静な判断力をもとに、慎重に感情をコントロールできます。
                                        </li>
                                        <strong class="my-3">②前向きな思考</strong>
                                        <li class="my-2">
                                            困難に対して、前向きな視点を認めることができます。失敗を学ぶ機会と捉え、困難な状況を克服するための前向きな方法を見つけようと努力します。
                                        </li>
                                        <strong class="my-3">③ソーシャルサポートの活用</strong>
                                        <li class="my-2">
                                            友人や家族、同僚などのサポートを受けることができます。他人とのつながりを大切にし、助け合いながら困難を乗り越えることができます。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">精神回復力の平均的な人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①適切なストレス管理</strong>
                                        <li class="my-2">
                                            平均的な人は、ストレスや圧力がある状況でも、適切な範囲でその影響に対処する能力を持っています。正しいストレス管理方法を使って心理的な平衡を保つことができます。
                                        </li>
                                        <strong class="my-3">②感情の調整</strong>
                                        <li class="my-2">
                                            平均的な人は、さまざまな感情を正しく認識し、それぞれに対処する方法を見つけることができます。感情のバランスを慎重に、ポジティブな感情を育て、ネガティブな感情を扱う方法を知っています。
                                        </li>
                                        <strong class="my-3">③挫折からの回復</strong>
                                        <li class="my-2">
                                            平均的な人は、失敗や挫折から立ち直る能力を持っています。これにより、自信を持って困難な状況に対処し、成長と学習を促進します。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">精神回復力の低い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①否定的な思考パターン</strong>
                                        <li class="my-2">
                                            精神的な回復力が低い人は、否定的な思考パターンに陥りがちです。
                                        </li>
                                        <strong class="my-3">②ストレスへの過敏な反応</strong>
                                        <li class="my-2">
                                            困難な状況やストレスが発生すると、過剰に敏感に反応することがあります。これにより、感情的に不安定になり、うつ症状が悪化する可能性があります。
                                        </li>
                                        <strong class="my-3">③孤独感と社会的孤独</strong>
                                        <li class="my-2">
                                            精神回復力が低い人は、社会的なつながりを築くことが難しい場合があります。孤独感が進むと、精神的な健康に悪影響を及ぼす可能性があります。
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>

                    {{-- 問題解決力 --}}
                    <div class="mt-2">
                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>問題解決力 (Problem Solving Skills)</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>

                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">問題解決力 (Problem Solving Skills)とは？</strong>
                                    <p class="my-2">
                                        複雑な課題や問題に対して効果的に解決策を見つけ、実行する能力。論理的思考や創造的な発想を含む。
                                    </p>
                                    <p class="my-2">
                                        問題解決力を発展させることで、個人の成長や対人関係の向上に大きな影響を与えることができます。
                                    </p>
                                    <p class="my-2">
                                        問題解決力の重要な要素には以下のようなものが含まれます。
                                    </p>

                                    <ul>
                                        <li class="my-2">
                                            <strong>①問題の正しい定義と理解</strong>
                                            問題を正しく理解することが解決への始まりです。誤った問題の定義や解釈は、解決策の見落としや誤った判断をしてしまう可能性があります。
                                        </li>
                                        <li class="my-2">
                                            <strong>情報収集と分析</strong>
                                            問題解決には事実とデータに基づいた意思決定が必要です。関連する情報を収集し、客観的に分析することで、問題の根底にあるパターンや傾向を把握し、より適切な解決策を見つける手助けとなります。
                                        </li>
                                        <li class="my-2">
                                            <strong>③解決策の評価と選択</strong>
                                            考えた解決策の中から最も適切なものを選ぶためには、それぞれの解決策の良いところと悪い所を評価する能力が必要です。目標に合致し、リスクとのバランスをとった解決策を選ぶことで、実際の問題解決への道筋が明確になります。
                                        </li>
                                        <li class="my-2">
                                            <strong>④実行とフィードバックのループ</strong>
                                            解決策を実行する過程で得られるフィードバックは非常に貴重です。
                                            結果を観察し、現実の状況に合わせて調整することで、問題解決プロセスを継続的に改善しながら、より良い結果を得るための努力を惜しまないことが大切です。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">
                                    <strong class="my-5">問題解決力の高い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①分析力（Analytical Skills）
                                        </strong>
                                        <li class="my-2">
                                            問題を細かく分析し、根本的な原因や影響を理解する能力が高いです。客観的な視点から情報を収集し、問題の本質を把握することができます。
                                        </li>
                                        <strong class="my-3">②クリティカルシンキング（Critical Thinking）</strong>
                                        <li class="my-2">
                                            論理的な思考や推論を用いて、さまざまな解決策の懸念や欠点を評価する能力が高いです。客観的な判断を下し、最適な選択をすることができます。
                                        </li>
                                        <strong class="my-3">③創造性（Creativity）</strong>
                                        <li class="my-2">
                                            新しいアイデアやアプローチを提案し、想像力を活用して問題に取り組む能力が高いです。異なる視点から問題を捉え、革新的な解決策を見つけることができます。
                                        </li>
                                        <strong class="my-3">④実行力（Execution）</strong>
                                        <li class="my-2">
                                            見つけた解決策を実際に行動に移す能力が高く、計画を立て、行動を起こすことで、問題解決の成果を実現します。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">問題解決力の平均的な人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①論理的な思考と創造性のバランス</strong>
                                        <li class="my-2">
                                            平均的な人は、論理的に問題を分析する能力と、新しいアイデアや考え方を考える創造性のバランスを良く持っています。新たな発想や視点を取り入れることで、状況に対応します。
                                        </li>
                                        <strong class="my-3">②情報収集と評価</strong>
                                        <li class="my-2">
                                            平均的な人は、問題に対する情報を収集し、それを評価するスキルを持っています。必要な情報を収集し、信頼性や重要性を評価することで、本質的な判断と解決策の選択が可能です。
                                        </li>
                                        <strong class="my-3">③計画と実行</strong>
                                        <li class="my-2">
                                            平均的な人は、問題解決のプロセスを計画的に進め、それを実行に移す能力を持っています。解決策を選択した後も、正しい手順を立てて実行することで、問題解決の効果的な実行が可能です。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">問題解決力の低い人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①固定的な思考パターン</strong>
                                        <li class="my-2">
                                            問題解決力が低い人は、一度のアプローチや固定的な思考パターンに慎重な傾向があります。これによって、柔軟性に欠けた解決策が導かれる可能性があります。
                                        </li>
                                        <strong class="my-3">②詳細な分析の不足</strong>
                                        <li class="my-2">
                                            問題解決力の低い人は、問題の根本的な原因や問題を適切に分析することが難しい場合があります。表面的な情報なので、問​​題の本質を見ることができません。結果として、一時的な解決策や対症療法的なアプローチが支配的になることがあります。
                                        </li>
                                        <strong class="my-3">③偏見傾向</strong>
                                        <li class="my-2">
                                            問題に直面した際に、困難な状況を避けようとする傾向が見られることがあります。成長の機会を逃すことがあり、ストレスや不安を感じる可能性もあります。
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>

                    {{-- 問題焦点型 --}}
                    <div class="mt-2">
                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>問題焦点型(Promblem Focus)</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>

                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">問題焦点型(Promblem Focus)とは？</strong>


                                    <p class="my-2">
                                        問題焦点型とは、問題解決のアプローチの一つであり、主に問題の原因や懸念を特定し、それに対処することを重視する方法です。具体的な問題や課題に直接的な解決策を提供することを目指します。
                                    </p>
                                    <p class="my-2">
                                        問題焦点型の重要な要素には以下のようなものが含まれます。
                                    </p>
                                    <ul>
                                        <li class="my-2">
                                            <strong>①原因の特定</strong>
                                            問題焦点型では、問題の根本的な原因や問題を特定することが重要です。問題の症状だけではなく、その奥にある根本的な理由を明確にします。
                                        </li>
                                        <li class="my-2">
                                            <strong>②分析と評価</strong>
                                            問題を分析し、その影響や​​範囲を評価します。
                                        </li>
                                        <li class="my-2">
                                            <strong>③具体的な対策</strong>
                                            問題の原因に対して具体的な対策を検討し、実行に移します。解決策を計画し、正しい手順を踏んで問題に取り組むことが重要です。
                                        </li>
                                        <li class="my-2">
                                            <strong>④持続的な改善</strong>
                                            問題焦点型のアプローチは、一時的な対処だけでなく、持続的な改善を目指します。問題の再発を防ぐために、対策の有効性を評価し、必要に応じて調整します。
                                        </li>
                                        <li class="my-2">
                                            <strong>⑤効率的なリソース利用</strong>
                                            問題の原因に集中することで、限られたリソースを最適に活用します。無駄な時間やエネルギーを削減し、効果的な解決策を検討します。
                                        </li>

                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">問題焦点型で考える人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①主要な課題に集中する</strong>
                                        <li class="my-2">
                                            問題焦点型の人は、複雑な状況や課題でも、落ち着いて主要な課題や目標に集中することができ、効果的なアプローチを考えることができます。
                                        </li>
                                        <strong class="my-3">②冷静な分析と優先順位付け</strong>
                                        <li class="my-2">
                                            問題焦点型の人は、感情的な影響を極力抑えつつ、事実に基づいた冷静な分析を行います。課題を小さな要素に分解し、それぞれの重要性や影響を評価して優先順位を付けることが得意です。
                                        </li>
                                        <strong class="my-3">③解決策の選択と実行</strong>
                                        <li class="my-2">
                                            問題焦点型の人は、複数の解決策の中から最適なものを選び、迅速に行動に移す能力があります。それによって、問題の解決に向けて効果的に進めることができます。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">問題焦点型で考えない人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①細部にこだわり過ぎる</strong>
                                        <li class="my-2">
                                            問題焦点型でない人は、重要でない部分に集中してしまい、気を取られる傾向があります。
                                        </li>
                                        <strong class="my-3">②失敗への対処</strong>
                                        <li class="my-2">
                                            問題焦点型でない人は、感情が判断に影響を与える可能性があります。 怒りや不安などの感情が優先され、客観的な分析ができなくなることがあります。
                                        </li>
                                        <strong class="my-3">③決断が苦手</strong>
                                        <li class="my-2">
                                            決断を下すことに時間がかかることがあります。複数の選択肢や情報に囲まれていると、どの選択肢が最適かを考えたり、完璧を求めたりする傾向があるため、すべての情報を考えるまで決断を遅らせることがあります。その結果、重要な意思決定が遅れ、チャンスを逃してしまう可能性があります。

                                        </li>
                                    </ul>

                                </li>
                            </ol>
                        </div>
                    </div>

                    {{-- 時間的展望 --}}
                    <div class="mt-2">
                        <button class="text-base font-semibold flex items-center justify-between accordion">
                            <span>時間的展望（Time Perspective）</span>
                            <span class="material-symbols-outlined">
                                expand_circle_down
                            </span>
                        </button>

                        <div class="panel">
                            <ol>
                                <li>
                                    <strong class="my-3">時間的展望（Time Perspective） とは？</strong>
                                    <p class="my-2">
                                        過去、現在、未来という時間的な視点をバランスよく持ち、未来への計画や展望を考える能力。過去の経験から学び、未来を見越して行動する力を含む。
                                    </p>
                                    <p class="my-2">
                                        人々は時間に対する考え方や重視する要素に違いがあり、それが個人の行動や決定に影響を及ぼします。
                                    </p>
                                    <p class="my-2">
                                        時間的展望の重要な要素には以下のようなものが含まれます。
                                    </p>
                                    <ul>
                                        <li class="my-2">
                                            <strong>①過去志向（Past-Oriented）</strong>
                                            過去志向の人々は、過去の出来事や経験に注目を置き、過去の成功や失敗に影響を受けることが多い傾向があります。可能性や現状認識を形成するのに重要な要素として過去を捉えます。過去の経験から得た知識や教訓を活用して、現在の状況や将来の選択肢を判断することがあります。
                                        </li>
                                        <li class="my-2">
                                            <strong>②現在志向（Present-Oriented）</strong>
                                            現在志向の人々は、現在の瞬間や快楽に重きを置く傾向があります。即時的な感情や欲求が行動や決定に大きな影響を与えることが考えられます。
                                        </li>
                                        <li class="my-2">
                                            <strong>③未来志向（Future-Oriented）</strong>
                                            未来志向の人々は、長期的な目標や計画に焦点を当てる傾向があります。未来志向の人々は、過去や現在の状況に構わず、自己成長や成功を追求することが多いです。
                                        </li>
                                        <li class="my-2">
                                            <strong>④目標設定と計画</strong>
                                            未来志向の人々は、長期的な目標を設定し、それに向かって計画的に行動する傾向があります。過去志向の人々は、過去の成功や失敗から学びつつ、未来に向けての目標を設定することがあります。
                                        </li>
                                        <li class="my-2">
                                            <strong>⑤リスク管理</strong>
                                            現在志向の人々は、即時的な満足や快楽を重視する傾向があります。一方、未来志向の人々は、将来のリスクや不確実性を考慮して、現在の行動を調整することがあります。
                                        </li>
                                        <li class="my-2">
                                            <strong>⑥学習と自己成長</strong>
                                            過去志向の人々は、過去の経験から学び、成長することを重視します。未来志向の人々は、将来の自己成長やスキルの習得に焦点をあて、新しい学習方法を積極的に模索することがあります。
                                        <li class="my-2">
                                            <strong>⑦人間関係とコミュニケーション</strong>
                                            過去志向の人々は、過去の人間関係や経験に基づいて人間関係を構築し、コミュニケーションを行っています。未来志向の人々は、長期的な関係協力や焦点を当ててコミュニケーションを行っています。
                                        </li>
                                    </ul>
                                    <hr colspan="3" class="my-5 border-t border-gray-200">
                                    <strong class="my-5">過去思考の人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①過去への執着</strong>
                                        <li class="my-2">
                                            過去の思考の人は、過去の出来事や経験に強い感情的な衝撃を受けることがあります。
                                        </li>
                                        <strong class="my-3">②反省と学習</strong>
                                        <li class="my-2">
                                            過去思考する人は、過去の行動や選択肢について深く反省し、そこから学ぶことを重視します。過去のミスを読まないようにするために、自己に向けた努力を惜しまない傾向があります。
                                        </li>
                                        <strong class="my-3">③歴史的な洞察力</strong>
                                        <li class="my-2">
                                            過去思考の人は歴史や文化に対して興味が強く、過去の出来事や傾向を分析することで、現代の課題や傾向を理解しようとします。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">現在思考の人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①現在重視</strong>
                                        <li class="my-2">
                                            現在思考の人は、今この瞬間を大切にし、その瞬間の喜びと充実感を追求します。過去や未来に進むことなく、現在の状況に焦点を当てる傾向があります。
                                        </li>
                                        <strong class="my-3">②即興性と柔軟性</strong>
                                        <li class="my-2">
                                            現在思考の人は、柔軟で即興的な能力に優れていることがあります。
                                            新しい状況に適応し、臨機応変に対処することが得意で、変化に対する抵抗力が低い傾向があります。
                                        </li>
                                        <strong class="my-3">③メンタルプレゼンス</strong>
                                        <li class="my-2">
                                            現在思考の人は、マインドフルネスや瞑想などのプラクティスを育て、自分自身とのつながりに関心を持つことがあります。自己認識を高め、ストレスや不安を軽減するために取り組むことがあります。
                                        </li>
                                    </ul>

                                    <hr colspan="3" class="my-5 border-t border-gray-200">

                                    <strong class="my-5">未来志向の人の特徴</strong>
                                    <ul>
                                        <strong class="my-3">①目標設定と計画</strong>
                                        <li class="my-2">
                                            未来志向の人は、自分の将来の目標を明確に設定し、それを達成するための計画を立てることに熱心です。
                                        </li>
                                        <strong class="my-3">②新しい可能性への探求</strong>
                                        <li class="my-2">
                                            未来志向の人は、常に新しいアイデアや可能性を追求します。変化や進化を目指しており、新しい技術やトレンドに敏感です。
                                        </li>
                                        <strong class="my-3">③リーダーシップと影響力</strong>
                                        <li class="my-2">
                                            未来志向の人は、自分のビジョンやアイデアを他人に伝え、影響力を持つことに熱心です。リーダーシップの知恵を発揮し、周囲の人々を巻き込んで変革を進める力を持っています。
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="{{ asset('/assets/css/result.css') }}" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".accordion").click(function() {
            $(this).toggleClass("active");
            var panel = $(this).next();
            if (panel.css("display") === "block") {
                panel.css("display", "none");
            } else {
                panel.css("display", "block");
            }
        });
    });
</script>
