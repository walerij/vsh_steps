<?php

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
    return view('vsh_steps');
});

Route::get('/category',  [App\Http\Controllers\CategoryController::class,"index"])->name('category');

Route::get('/category/create',  [App\Http\Controllers\CategoryController::class,"create"])->name('category.create');
Route::post('/category', [App\Http\Controllers\CategoryController::class,"store"])->name('category.store');
Route::get('/category/{category}', [App\Http\Controllers\CategoryController::class,"show"])->name('category.show');
Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class,"edit"])->name('category.edit');
Route::patch('/category/{category}', [App\Http\Controllers\CategoryController::class,"update"])->name('category.update');
Route::get('/category/{category}/delete', [App\Http\Controllers\CategoryController::class,"destroy"])->name('category.delete');


Route::get('/courses',  [App\Http\Controllers\CourseController::class,"index"])->name('courses');

//Route::get('/courses',  [App\Http\Controllers\CourseController::class,"index"])->name('courses');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
