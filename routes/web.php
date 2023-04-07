<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
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

// Route::get ('/',function () {
//     return view ('pages.home');
// });


// Route::get('siswa', [SiswaController::class, 'index']);

// php artisan view:clear
// php artisan cache:clear
// php artisan optimize 


Route::get('/',[App\Http\Controllers\HomeController::class, 'indexHome']) -> name('home');
Route::get('/categories',[App\Http\Controllers\CategoryController::class, 'indexCategory']) -> name('categories');