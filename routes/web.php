<?php

use App\Http\Controllers\Frontend\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//  Route::get('/hi',  function() {
//     return 'Hello World';
//  });

// Route::group(['namespace' => 'Frontend'], function() 
// {
//     Route::resource('home', 'HomeController');
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get("/home", function() {
//     return "hh";
// });

route::get('/', [HomeController::class, 'index']);

