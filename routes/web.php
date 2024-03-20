<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

Route::controller(ServiceController::class)->prefix('/service')->group(function () {
    Route::get('/iot', 'iot')->name('service-iot');
    Route::get('/multimedia', 'multimedia')->name('service-multimedia');
    Route::get('/software', 'software')->name('service-software');
});

Route::controller(KatalogController::class)->prefix('/katalog')->group(function () {
    Route::get('/', 'index')->name('katalog');
    Route::post('/store', 'store')->name('katalog-store');
    Route::patch('/update', 'update')->name('katalog-update');
    Route::delete('/store', 'destroy')->name('katalog-destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
