<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ViewblogController;

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

Route::get('/', [MainController::class,'allPost'])->name('home');
Route::get('/blog/view/{id}',[ViewblogController::class, 'index'])->name('post_view');

Route::middleware(['auth'])->group(function(){
    Route::get('/blog',[PostController::class, 'index'])->name('post_index');
    Route::post('/blog',[PostController::class, 'create'])->name('post_create');
    
    Route::get('/dashboard', [HomeController::class, 'allPost'])->name('dashboard');
    Route::get('/blog/edit/{id}',[PostController::class, 'edit'])->name('post_edit');
    Route::put('/blog/edit/{id}',[PostController::class, 'update'])->name('post_update');
    Route::get('/blog/delete/{id}',[PostController::class, 'destroy'])->name('post_delete');
});
 

require __DIR__.'/auth.php';
