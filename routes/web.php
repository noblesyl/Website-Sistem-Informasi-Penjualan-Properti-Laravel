<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', function () {
    return view('backend.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route category
Route::get('/category', [CategoryController::class, 'index'])->name('category-index');
Route::get('/categorycreate', [CategoryController::class, 'create'])->name('category-create');
Route::post('/categorystore', [CategoryController::class, 'store'])->name('category-store');
Route::get('/categoryedit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
Route::put('/categoryupdate/{id}', [CategoryController::class, 'update'])->name('category-update');
Route::delete('/categorydelete/{id}', [CategoryController::class, 'delete'])->name('category-delete');
