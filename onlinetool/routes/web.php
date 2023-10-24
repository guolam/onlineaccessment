<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Google\Service\Analytics\Resource\Management;


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
  Route::get('/analysis/{count}', [AnalysisController::class, 'show'])->name('analysis');

  // Route::get('/analysis', [AnalysisController::class, 'show'])->name('analysis');
});


Route::get('/admin', function () {
  return view('dashboard.admin');
});
Route::group(['prefix' => 'admin'], function () {
  // 登録
  Route::get('register', [AdminController::class, 'create'])
    ->name('admin.register');

  Route::post('register', [AdminController::class, 'store']);

  // ログイン
  Route::get('login', [AdminController::class, 'showLoginPage'])
    ->name('admin.login');

  Route::post('login', [AdminController::class, 'login']);

  // 以下の中は認証必須のエンドポイント
  Route::middleware(['auth:admin'])->group(function () {
    // ダッシュボード
    Route::get('dashboard', fn () => view('admin.dashboard'))
      ->name('admin.dashboard');

    // ログアウト
    Route::post('logout', [AdminController::class, 'logout'])
      ->name('admin.logout');

    Route::get('index', [ManagementController::class, 'index'])->name('admin.index');
    Route::get('manage', [ManagementController::class, 'manage'])->name('admin.manage');
    Route::get('result/{user_id}', [ManagementController::class, 'result'])->name('admin.result');
    // user_idとcountを受け取る
    Route::get('analysis/{user_id}/{count}', [ManagementController::class, 'analysis'])->name('admin.analysis');
  });
});

Route::get('/online_admin', function () {
  return view('dashboard.online');
});

//summaryページ
Route::middleware(['auth', 'verified'])->get('/summary', function () {
  return view('summary');
})->name('summary');


Route::get('/register/{uuid?}', [RegisteredUserController::class, 'create'])
  ->middleware('guest')
  ->name('register');

Route::get("sitemap", [SitemapController::class, "index"])->name("sitemap");

require __DIR__ . '/auth.php';
