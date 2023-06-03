<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\MahasiswaModel;
use App\Models\NilaiKhsModel;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/kuliah', [KuliahController::class, 'index']);
    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/hobi', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/matakuliah', [MatakuliahController::class, 'index']);
    Route::get('/mahasiswa/khs/{id}', function($id){
        $mhs = MahasiswaModel::find($id);

        $khs = NilaiKhsModel::where('mhs_id',$id)->get();
        return view('khs')
            ->with('mahasiswa', $mhs)
            ->with('khs', $khs); 
    });

    Route::get('/mahasiswa/cetak_khs/{id}', [MahasiswaController::class, 'cetak_pdf']);

    Route::resource('/articles', ArticleController::class);
    Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswas', 'id');
    Route::post('/mahasiswa/data', [MahasiswaController::class , 'data']);
    Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
    Route::resource('/matakuliah', MatakuliahController::class)->parameter('matakuliah', 'id');
});




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
    
    //Route::resource('contact-us', PageController::class)->only(['index']);
    
    Route::get('/prak2', function(){
        return view('layout.template');
    });







