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


/* Основные роуты*/
Route::get('/', function () {
    return view('vsh_steps');
})->name('home');

/*Home*/

Route::get('/home/courses',     [App\Http\Controllers\HomeController::class,"courses"])->name('home.courses');
Route::get('/home/vebinars',    [App\Http\Controllers\HomeController::class,"vebinars"])->name('home.vebinars');
Route::get('/home/robosharp',   [App\Http\Controllers\HomeController::class,"robosharp"])->name('home.robosharp');



/*CRUD категорий*/



    Route::get('/category',  [App\Http\Controllers\CategoryController::class,"index"])->name('category');

    Route::get('/category/create',  [App\Http\Controllers\CategoryController::class,"create"])->name('category.create');
    Route::post('/category', [App\Http\Controllers\CategoryController::class,"store"])->name('category.store');
    Route::get('/category/{category}', [App\Http\Controllers\CategoryController::class,"show"])->name('category.show');
    Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class,"edit"])->name('category.edit');
    Route::patch('/category/{category}', [App\Http\Controllers\CategoryController::class,"update"])->name('category.update');
    Route::get('/category/{category}/delete', [App\Http\Controllers\CategoryController::class,"destroy"])->name('category.delete');




/* курсы роуты для простого пользователя */

    //Route::get('/courses',  "CourseController@index")->name('courses');
    Route::get('/courses/{getcats}',  "CourseController@courses")->name('courses');
    Route::get('/course/{course}/show', [App\Http\Controllers\CourseController::class,"show"])->name('course.show');

/*отображение уроков курса*/
    Route::get('/lessons/{lesson}/show', [App\Http\Controllers\LessonsController::class,"show"])->name('lesson.show');





/*CRUD уроков*/
Route::get('/teachers/lessons',  [App\Http\Controllers\LessonscrudController::class,"index"])->name('teachers.lessons');
Route::get('/teachers/lessons/create',  [App\Http\Controllers\LessonscrudController::class,"create"])->name('teachers.lessons.create');
Route::post('/teachers/lessons', [App\Http\Controllers\LessonscrudController::class,"store"])->name('teachers.lessons.store');
//Route::get('/courses',  [App\Http\Controllers\CourseController::class,"index"])->name('courses');
Route::get('/teachers/lessons/{lesson}', [App\Http\Controllers\LessonscrudController::class,"show"])->name('teachers.lessons.show');




Route::get('/dashboard', function () {
    return view('dashboard'); //после залогинивания
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/userroles.php';
require __DIR__.'/courses.php';
require __DIR__.'/steps.php';
