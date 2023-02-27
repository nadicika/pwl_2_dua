<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);
*/

/*
Route::get('/', [HomeController::class, 'index']);

Route::get('/', [AboutController::class, 'index']);

Route::get('//{id}', [ArticleController::class, 'index']);
*/

Route::get('/', [PageController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/list', [PageController::class, 'product']);
});

Route::get('/news/{param}', [PageController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});

Route::get('/about-us', function () {
    echo "Saya Inthania Nadicika Kurniawan seorang mahasiswa dari Politeknik Negeri Malang. <br>
    Saya berasal dari Jurusan Teknologi Informasi dengan Program Studi Teknik Informatika.";
});

Route::resource('index', PageController::class);