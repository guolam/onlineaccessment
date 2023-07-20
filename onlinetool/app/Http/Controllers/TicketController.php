<?php
// TicketController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Answer;

class TicketController extends Controller
{
  // 回数券機能のアクション

  public function showRemainingTickets()
  {
    // ログインユーザーのIDを取得
    $userId = auth()->user()->id;

    // ユーザーに関連付けられた回数券情報を取得
    $ticket = Ticket::where('user_id', $userId)->first();

    // テンプレートに $ticket 変数を渡す
    return view('test', compact('ticket'));
  }

  public function submitAnswer(Request $request)
  {
    // 回答の送信と回数の減算などの処理
    // ...

    Answer::create([
      'user_id' => auth()->user()->id,
      'answer_content' => $request->input('answer_content'), // 回答データを適切なフォームフィールドから取得
    ]);

    // 回答を送信して回数券を減らすなどの処理

    return redirect()->back()->with('success', '回答を送信しました。');
  }
}
