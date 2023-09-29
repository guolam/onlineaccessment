<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Attribution;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    public function index()
    {
        $uuid = Auth::user()->uuid;
        // uuidを含むusers登録URLを表示
        $register_url = url('/register/' . $uuid);
        return view('admin.dashboard', compact('register_url'));
    }

    public function manage()
    {
        $users = User::where('admin_id', Auth::id())->get();
        return view('admin.manage', compact('users'));
    }

    public function result($user_id)
    {
        // answerのカウントの最大値を取得
        $max_count = Answer::where('user_id', $user_id)->max('count');
        $attributions = Attribution::all();
        // 空の二重配列を用意
        $result = [];
        $date = [];
        for ($i = 0; $i < $max_count; $i++) {
            // attribution_idの回数分繰り返す
            $array = [];
            foreach ($attributions as $attribution) {
                // attribution_id と count が一致するanswerのvalueを取得
                $answers = Answer::where([
                    ['user_id', $user_id],
                    ['attribution_id', $attribution->id],
                    ['count', $i + 1]
                ])->pluck('value');
                // $answersのvalueの平均値を取得
                $average = $answers->avg();
                // $arrayに$averageを追加
                $array[] = $average;
            }
            $day = Answer::where('user_id', $user_id)->where('count', $i + 1)->first()->created_at;
            $day = $day->format('Y-m-d');
            $date[] = $day;
            // $resultに$arrayを追加
            $result[] = $array;
        }
        // $attributionsからnameのみを取得
        $attribution = $attributions->pluck('name');
        $user = User::find($user_id);
        return view('admin.result', compact('result', 'attribution', 'date', 'user'));
    }

    public function analysis($user_id, $count)
    {
        $attributions = Attribution::all();

        // 空の二重配列を用意
        $result = [];
        foreach ($attributions as $attribution) {
            // attribution_id と count が一致するanswerのvalueを取得
            $answers = Answer::where([
                ['user_id', $user_id],
                ['attribution_id', $attribution->id],
                ['count', $count]
            ])->pluck('value');

            // $answersのvalueの平均値を取得
            $average = $answers->avg();
            $result[] = $average;
        }
        $day = Answer::where('user_id', $user_id)->where('count', $count)->first()->created_at;
        $date = $day->format('Y-m-d');
        $attributions = $attributions->pluck('name')->toArray();

        $kanjiNames = [
            'Problemsolving' => '問題解決力',
            'Resilience' => 'レジリエンス',
            'Problemfocus' => '問題焦点型',
            'Timeperspective' => '時間的展望',
            'Selfesteem' => '自己肯定感',
            'Selfunderstand' => '自己認知',
            'Communication' => 'コミュニケーション力',
        ];

        // 英語名を日本語名に変換する関数
        $getKanjiName = function ($englishName) use ($kanjiNames) {
            return $kanjiNames[$englishName] ?? $englishName;
        };

        return view('admin.analysis', compact('result', 'attributions', 'date', 'getKanjiName'));
    }
}
