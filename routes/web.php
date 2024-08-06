<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PengajuanSKHPN;
use App\Http\Controllers\PermohonanNarasumber;
use App\Http\Controllers\PermohonanNarasumberController;

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

Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('/admin/pengaduan', [AdminController::class, 'pengaduan'])->name('admin.pengaduan.index');
    Route::get('/admin/laporan_narasumber', [AdminController::class,'laporan_narasumber'])->name('admin.laporan_narasumber');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


//route pengaduan
//history
Route::get('/history/permohonan_narasumber', [UserController::class,'history_permohonan_narasumber'])->name('history_permohonan_narasumber');

Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/create', [PengaduanController::class, 'store'])->name('pengaduan.form');

//route admin pengaduan
Route::get('/admin/pengaduan', [AdminPengaduanController::class, 'index'])->name('admin.pengaduan.index');
Route::get('/admin/pengaduan/{id}', [AdminPengaduanController::class, 'show'])->name('admin.pengaduan.show');
Route::delete('/admin/pengaduan/{id}', [AdminPengaduanController::class, 'destroy'])->name('admin.pengaduan.destroy');

//permohonan skhpn
Route::get('/permohonan', [PermohonanController::class, 'index'])->name('permohonan.index');
Route::get('/permohonan/pengajuan_skhpn', [PengajuanSKHPN::class,'index'])->name('pengajuan_skhpn.index');

//permohonan narasumber
Route::get('/permohonan/permohonan_narasumber', [PermohonanNarasumberController::class,'index'])->name('permohonan_narasumber.index');
Route::post('/permohonan-narasumber', [PermohonanNarasumberController::class,'store'])->name('submit.request');
Route::get('/permohonan-narasumber/{id}',[PermohonanNarasumberController::class,'show'])->name('permohonan.show');
Route::delete('/permohonan-narasumber/{id}', [PermohonanNarasumberController::class, 'destroy'])->name('permohonan.destroy');
Route::get('/permohonan', [AdminController::class,'laporan_narasumber'])->name('admin.laporan_narasumber');
Route::patch('permohonan-narasumber/{id}/updateStatus',[AdminController::class,'updateStatus'])->name('admin.laporan_narasumber.updateStatus');
//admin
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');

require __DIR__.'/auth.php';
