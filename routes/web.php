<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/jadwal', function () {
    return view('user.pasien.jadwal');
})->name('jadwal');



Route::resource('/disease', PenyakitController::class)->names([
    'index' => 'penyakit.index',
    'create' => 'penyakit.create',
    'store' => 'penyakit.store',
    'show' => 'penyakit.show',
    'edit' => 'penyakit.edit',
    'update' => 'penyakit.update',
    'destroy' => 'penyakit.destroy'
]);

Route::get('/diseases/{name}', [PenyakitController::class, 'show'])->name('disease.show');

Route::get('/resep/{name}', [ResepController::class, 'show'])->name('resep.show');


// Route::middleware(['auth','admin'])->group(function(){
//     Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin/dashboard');
// });

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin/dashboard');
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin/dashboard');
    Route::post('admin/artikel', [ArtikelController::class, 'store'])->name('sendArikel');
    Route::post('admin/user', [UserController::class, 'store'])->name('sendUser');
    Route::post('admin/makananSehat', [ResepController::class, 'store'])->name('sendMakan');
});


Route::middleware(['auth', 'dokter'])->group(function () {
    Route::get('/dok', [DokterController::class, 'index'])->name('dokter/home');
    Route::get('/profilDokter', [DokterController::class, 'profil'])->name('dokter/profil');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profil', function () {
        return view('user.pasien.profil');
    })->name('profil');

    Route::get('/kalku', function () {
        return view('user.pasien.fitur.kalkulator.kalkulator');
    })->name('kalkulator');

    Route::get('/kesehatan', function () {
        return view('user.pasien.fitur.pemantau');
    })->name('pantau');
});

require __DIR__ . '/auth.php';
