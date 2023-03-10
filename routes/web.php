<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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



Route::get('/news/{param}', [PageController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/', [PageController::class, 'program']);
});

Route::resource('index', PageController::class);

//P3
Route::get('/home', [PageController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/', [PageController::class, 'product']);
});

Route::get('/about-us', [PageController::class, 'aboutus']);

Route::resource('contact-us', PageController::class)->only(['index']);

Route::get('/prak2', function(){
    return view('layout.template');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/kuliah', [KuliahController::class, 'index']);

Route::get('/kendaraan', [KendaraanController::class, 'index']);

Route::get('/hobi', [HobiController::class, 'index']);

Route::get('/keluarga', [KeluargaController::class, 'index']);

Route::get('/matkul', [MatkulController::class, 'index']);