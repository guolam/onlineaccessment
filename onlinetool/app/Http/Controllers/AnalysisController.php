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

    return view('analysis', compact('result', 'attributions', 'date'));
  }
}

//     ($index)
//   {
//     // $result の仮想的なデータを作成する（実際の計算方法に合わせて修正が必要）
//     $result = [
//       ['attribute1' => 4.5, 'attribute2' => 3.2, 'attribute3' => 2.7], // 例: 計算結果1
//       ['attribute1' => 3.8, 'attribute2' => 4.1, 'attribute3' => 2.9], // 例: 計算結果2
//       // 他の計算結果を追加
//     ];

//     // 特定のインデックスの結果を取得
//     $calculatedResult = $result[$index];

//     // ビューデータを準備
//     $data = [
//       'index' => $index,
//       'calculatedResult' => $calculatedResult, // 計算結果を渡す
//       // 他のビューデータを追加
//     ];

//     // var_dump($index);
//     return view('analysis', $data);
//   }
// }
