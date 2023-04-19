<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\PengalamanKerjaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

//route digunakan untuk menembak controller di route kita bisa menentukan
//tag yang di tampilkan setelah domain web nya misal (youtube.com/dashboard)
route::get('/', [HomeController::class, 'index'])->name('landing');
route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware'],  function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'create'])->name('register');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('/dashboard/logout', [DashboardController::class, 'destroy'])->name('logout');
});
// Route::resource('pengalaman_kerja', [PengalamanKerjaController::class] );
// Auth::routes();
// Auth::routes(['register' => false]);
// Auth::routes(['register' => false]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

