<?php

use App\Http\Controllers\ThemeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('layout');
});
Route::get('themes/create', [ThemeController::class,'create'])->name('themes.create');
Route::get('themes/', [ThemeController::class,'index'])->name('youssef');
Route::post('themes/store', [ThemeController::class,'store'])->name('kiki');
