<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AnalysisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});



Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  // 回数券を持つユーザーの回答回数を表示するページ（例として'/tickets'を使用）
  Route::get('/tickets', [TicketController::class, 'showRemainingTickets'])->name('tickets.show');
  // 回答を送信するルート
  Route::post('/submit-answer', [TicketController::class, 'submitAnswer'])->name('answer.submit');

  //テスト結果送信ルート
  Route::post('/submit-test', [TestController::class, 'store'])->name('test.submit');
  //テスト内容表示ルート
  Route::get('/test', [TestController::class, 'index'])->name('test');
  //結果表示ルート
  Route::get('/result', [TestController::class, 'show'])->name('result');
  //分析結果表示ルート
  // Route::get('analysis', [TestController::class, 'analysis'])->name('analysis');
  Route::get('/analysis/{index}', [AnalysisController::class, 'show'])->name('analysis');
});





require __DIR__ . '/auth.php';
