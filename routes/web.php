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


/*CRUD курсов*/
/* создание, редактирование, удаление, активация курсов -  то, что делаем с ролью teacher*/
Route::get('/teachers/course',  [App\Http\Controllers\CoursecrudController::class,"index"])->name('teachers.course');
Route::get('/teachers/course/role',  [App\Http\Controllers\CoursecrudController::class,"role"])->name('teachers.course.role');
Route::get('/teachers/course/create',  [App\Http\Controllers\CoursecrudController::class,"create"])->name('teachers.course.create');
Route::post('/teachers/course', [App\Http\Controllers\CoursecrudController::class,"store"])->name('teachers.course.store');
Route::get('/teachers/course/{course}', [App\Http\Controllers\CoursecrudController::class,"show"])->name('teachers.course.show');
Route::get('/teachers/course/{course}/activate', [App\Http\Controllers\CoursecrudController::class,"activate"])->name('teachers.course.activate');

Route::get('/teachers/course/{course}/edit', [App\Http\Controllers\CoursecrudController::class,"edit"])->name('teachers.course.edit');
Route::get('/teachers/course/{course}/lessons', [App\Http\Controllers\CoursecrudController::class,"lessons"])->name('teachers.course.lessons');
Route::patch('/teachers/course/{course}', [App\Http\Controllers\CoursecrudController::class,"update"])->name('teachers.course.update');
Route::get('/teachers/course/{course}/delete', [App\Http\Controllers\CoursecrudController::class,"destroy"])->name('teachers.course.delete');


/* курсы */

    //Route::get('/courses',  "CourseController@index")->name('courses');
    Route::get('/courses/{getcats}',  "CourseController@courses")->name('courses');
    Route::get('/courses/{course}', [App\Http\Controllers\CourseController::class,"show"])->name('courses.show');


/*CRUD уроков*/
Route::get('/teachers/lessons',  [App\Http\Controllers\LessonscrudController::class,"index"])->name('teachers.lessons');


//Route::get('/courses',  [App\Http\Controllers\CourseController::class,"index"])->name('courses');

Route::get('/dashboard', function () {
    return view('dashboard'); //после залогинивания
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
