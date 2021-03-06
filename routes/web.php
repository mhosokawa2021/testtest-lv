<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController; // 追記
use App\Http\Controllers\HelloController; // 追記
use App\Http\Controllers\PlanController; // 追記
use App\Http\Controllers\CreatorController; // 追記
use App\Http\Controllers\DashboardController; // 追記
use App\Http\Controllers\CreatorPlanController;
use App\Http\Controllers\PlanRequestController;
use App\Http\Controllers\ProjectController;


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
    return view('topview');
});

Route::get('/top', function () {
    return view('top');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/search', [DashboardController::class, 'search'])->name('dashboard.search');

    // Plan詳細
    Route::get('/plan/user_list', [PlanController::class, 'show_list'])->name('plan.show_list');
    Route::get('/plan/{id}', [PlanController::class, 'show'])->name('plan.show');
    // Project登録
    Route::get('/project/register/creator={creator_id}/plan={plan_id}', [ProjectController::class, 'register'])->name('plan.register');
    // upload
    Route::post('/project/upload/proc={project_procs_id}', [ProjectController::class, 'upload'])->name('project_img.register');

    // Creator詳細
    Route::get('/creator/{id}', [CreatorController::class, 'show'])->name('creator.show');
    // Plan経由リクエスト
    Route::get('/request/creator={creator_id}/plan={plan_id}', [CreatorPlanController::class, 'request'])->name('creator_plan.request');
   
    // PlanRequest
    // プラン登録
    Route::post('/request/creator={creator_id}/plan={plan_id}/result', [PlanRequestController::class, 'store'])->name('request.store');
    Route::post('/frequest/creator={creator_id}/result', [PlanRequestController::class, 'fstore'])->name('frequest.store');
    
    // 詳細表示
    Route::get('/request/user/request={plan_id}', [PlanRequestController::class, 'showDetail'])->name('user-request-detail.show');
    Route::get('/project/user/project={project_id}', [ProjectController::class, 'showDetail'])->name('user-project-detail.show');
    
    // 一覧取得(クリエイター相談中)
    Route::get('/request/user/creator={creator_id}', [PlanRequestController::class, 'showCreator'])->name('creator-requests.show');
    Route::get('/project/user/creator={creator_id}', [ProjectController::class, 'showCreator'])->name('creator-project.show');

    // 一覧取得
    Route::get('/request/user/', [PlanRequestController::class, 'show'])->name('user-requests.show');
    Route::get('/project/user/', [ProjectController::class, 'show'])->name('user-project.show');
    
    // 自由依頼リクエスト
    Route::get('/frequest/creator={creator_id}', [PlanRequestController::class, 'request'])->name('free_requests.request');


    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
    Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
    Route::get('/mysearch', [TweetController::class, 'search']);
    Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit'])->name('tweets.edit');
    Route::put('/tweets/{tweet}', [TweetController::class, 'update'])->name('tweets.update');
    Route::delete('/tweets/{tweet}', [TweetController::class, 'destroy'])->name('tweets.destroy');
});
// Routeを置き換え 終了

require __DIR__.'/auth.php';