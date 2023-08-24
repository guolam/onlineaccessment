<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Attribution;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;


class TestController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // Questionから170個の質問をランダムに取得
    $questions = Question::inRandomOrder()->limit(10)->get();
    return view('test', compact('questions'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // answersテーブル user_id の最大カウントを取得
    $max_count = Answer::where('user_id', Auth::id())->max('count') ?? 0;
    $questions = Question::all();
    foreach ($questions as $question) {
      $question_id = $question->id;
      if ($request->$question_id) {
        $answer = new Answer();
        $answer->user_id = Auth::id();
        $answer->question_id = $question_id;
        $answer->attribution_id = $question->attribution_id;
        if ($question->reversedIndices) {
          $number = $request->$question_id;
          $array = ['1' => '5', '2' => '4', '3' => '3', '4' => '2', '5' => '1'];
          $number = $array[$number];
          $answer->value = $number;
        } else {
          $answer->value = $request->$question_id;
        }
        $answer->value = $request->$question_id;
        $answer->count = $max_count + 1;
        $answer->save();
      }
    }
    return redirect()->route('result');
  }

  /**
   * Display the specified resource.
   */
  public function show()
  {
    // answerのカウントの最大値を取得
    $max_count = Answer::where('user_id', Auth::id())->max('count');
    $attributions = Attribution::all();
    // 空の二重配列を用意
    $result = [];
    for ($i = 0; $i < $max_count; $i++) {
      // attribution_idの回数分繰り返す
      $array = [];
      foreach ($attributions as $attribution) {
        // attribution_idが$jのもの valueのみを取得
        $answers = Answer::where('user_id', Auth::id())->where('count', $max_count)->where('attribution_id', $attribution->id)->pluck('value');
        // $answersのvalueの平均値を取得
        $average = $answers->avg();
        // $arrayに$averageを追加
        $array[] = $average;
      }
      // $resultに$arrayを追加
      $result[] = $array;
    }
    return view('result');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
