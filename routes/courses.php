<?php


use Illuminate\Support\Facades\Route;


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

