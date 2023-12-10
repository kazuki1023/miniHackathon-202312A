<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/create/user', [ProfileController::class, 'create'])->name('create.user');
    Route::post('/create/user', [ProfileController::class, 'storeUser'])->name('store.user');
    // サークル追加ルーティング処理
    Route::get('/club/create', [ClubController::class, 'create'])->name('club.create');
    Route::post('/club/store', [ClubController::class, 'store'])->name('club.store');
});


Route::get('/users', function () {
    return view('introduce.index');
});


require __DIR__.'/auth.php';
