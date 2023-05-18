<?php

use App\Http\Controllers\DocumentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {
    return view('layout');
});
Route::get('/', [ThemeController::class,'index'])->name('youssef');
Route::get('themes/create', [ThemeController::class,'create'])->name('themes.create');
Route::get('themes/', [ThemeController::class,'index'])->name('youssef');
Route::post('themes/store', [ThemeController::class,'store'])->name('kiki');
Route::get('themes/{id}', [ThemeController::class,'show'])->name('themes.show');
// Route::get('themes/del/{id}', [ThemeController::class,'destroy'])->name('themes.deletes');
Route::delete('themes/{id}', [ThemeController::class,'destroy'])->name('themes.delete');
Route::get('themes/{id}/edit', [ThemeController::class,'edit'])->name('themes.edit');
Route::put('themes/{id}', [ThemeController::class,'update'])->name('themes.update');
Route::get('documents/create', [DocumentController::class,'create'])->name('documents.create');
Route::get('documents',[ DocumentController::class,'index'])->name('documents.index');
Route::get('documents/{id}',[ DocumentController::class,'show'])->name('documents.show');
Route::post('documents', [DocumentController::class,'store'])->name('documents.store');
Route::get('documents/{id}/edit', [DocumentController::class,'edit'])->name('documents.edit');
Route::get('documents/{id}', [DocumentController::class,'edit'])->name('documents.update');

Route::delete('documents/{id}', [DocumentController::class,'destroy'])->name('documents.delete');
