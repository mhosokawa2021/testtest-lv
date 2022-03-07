<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController; // 追記

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
Route::get('/', function () {
    return view('top');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
    Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
    Route::get('search', [TweetController::class, 'search']);
});
// Routeを置き換え 終了

require __DIR__.'/auth.php';