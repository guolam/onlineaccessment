<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Attribution;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class AnalysisController extends Controller
{
  public function show($count)
  {
    $attributions = Attribution::all();

    // 空の二重配列を用意
    $result = [];
    foreach ($attributions as $attribution) {
      // attribution_id と count が一致するanswerのvalueを取得
      $answers = Answer::where([
        ['user_id', Auth::id()],
        ['attribution_id', $attribution->id],
        ['count', $count]
      ])->pluck('value');

      // $answersのvalueの平均値を取得
      $average = $answers->avg();
      $result[] = $average;
    }
    $day = Answer::where('user_id', Auth::id())->where('count', $count)->first()->created_at;
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


    return view('analysis', compact('result', 'attributions', 'date', 'getKanjiName'));
  }
}

//    
