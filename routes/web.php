<?php

use App\Models\Article;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willtin
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::controller(ArticleController::class)->group(function(){
//     //글쓰기
//     Route::get('/articles/create', 'create')->name('articles.create');
//     //글 저장하기 routes
//     Route::post('/articles','store')->name('articles.store');
//     // 글 목록보기
//     Route::get('articles', 'index')->name('articles.index');
//     //개별 글 보기
//     Route::get('articles/{article}', 'show')->name('articles.show');
//     // 글 수정 폼들어가기
//     Route::get('articles/{article}/edit','edit')->name('articles.edit');
//     // 글 수정하기
//     Route::patch('articles/{article}','update')->name('articles.update');
//     //글 삭제하기
//     Route::delete('articles/{article}','destroy')->name('articles.delete');
// });

Route::get('/', HomeController::class)->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('articles',ArticleController::class);

Route::resource('comments',CommentController::class);

Route::get('profile/{user:username}',[ProfileController::class, 'show'])
->name('profile')
->where('user','^[A-Za-z0-9-]+$');

Route::post('follow/{user}]', [FollowController::class,'store'])->name('follow');

Route::delete('follow/{user}]', [FollowController::class,'destroy'])->name('unfollow');

