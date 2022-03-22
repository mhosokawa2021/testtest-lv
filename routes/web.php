<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController; // 追記
use App\Http\Controllers\HelloController; // 追記
use App\Http\Controllers\PlanController; // 追記
use App\Http\Controllers\CreatorController; // 追記
use App\Http\Controllers\DashboardController; // 追記
use App\Http\Controllers\CreatorPlanController;
use App\Http\Controllers\PlanRequestController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routeを置き換え 開始
// Route::get('/hello', function () {
//     return view('hello');
// });

Route::get('/', function () {
    return view('top');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/search', [DashboardController::class, 'search'])->name('dashboard.search');

    // Route::get('/hello', [HelloController::class, 'index'])->name('hello.index');
    // // 検索お試し
    // Route::get('/hello/search', [HelloController::class, 'search'])->name('hello.search');

    // Plan詳細
    Route::get('/plan/{id}', [PlanController::class, 'show'])->name('plan.show');
    // Creator詳細
    Route::get('/creator/{id}', [CreatorController::class, 'show'])->name('creator.show');
    // creator_plan
    Route::get('/request/c{creator_id}/p{plan_id}', [CreatorPlanController::class, 'request'])->name('creator_plan.request');
    // プラン登録
    Route::post('/request/c{creator_id}/p{plan_id}/result', [PlanRequestController::class, 'store'])->name('request.store');


    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
    Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
    Route::get('/mysearch', [TweetController::class, 'search']);
    Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit'])->name('tweets.edit');
    Route::put('/tweets/{tweet}', [TweetController::class, 'update'])->name('tweets.update');
    Route::delete('/tweets/{tweet}', [TweetController::class, 'destroy'])->name('tweets.destroy');
});
// Routeを置き換え 終了

require __DIR__.'/auth.php';