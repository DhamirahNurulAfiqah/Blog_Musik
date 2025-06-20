<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SearchController;

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
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/artikel1', function () {
    return view('artikel1');
    
});
Route::get('/artikel2', function () {
    return view('artikel2');
});
Route::get('/artikel3', function () {
    return view('artikel3');
});

Route::get('/pop', function () {   //tukar
    return view('pop');
});
Route::get('/rock', function () {
    return view('rock');
});
Route::get('/klasik', function () {
    return view('klasik');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('penulis', PenulisController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('artikel', ArtikelController::class);
});



require __DIR__.'/auth.php';
