<?php


use Illuminate\Support\Facades\Route;


/*CRUD шагов - step-ов*/
Route::get('/teachers/steps/create',  [App\Http\Controllers\StepscrudController::class,"create"])->name('teachers.steps.create');
Route::post('/teachers/steps', [App\Http\Controllers\StepscrudController::class,"store"])->name('teachers.steps.store');
Route::get('/teachers/steps/{step}/createcontent', [App\Http\Controllers\StepscrudController::class,"createcontent"])->name('teachers.steps.createcontent');
Route::post('/teachers/steps/{step}/', [App\Http\Controllers\StepscrudController::class,"storecontent"])->name('teachers.steps.storecontent');

/*вывод контента шагов для ученика*/
Route::get('/steps/{step}/video', [App\Http\Controllers\StepsController::class,"video"])->name('steps.video');
Route::get('/steps/{step}/quest', [App\Http\Controllers\StepsController::class,"quest"])->name('steps.quest');
Route::get('/steps/{step}/image', [App\Http\Controllers\StepsController::class,"quest"])->name('steps.image');
Route::get('/steps/{step}/text', [App\Http\Controllers\StepsController::class,"quest"])->name('steps.text');
Route::get('/steps/{step}/test', [App\Http\Controllers\StepsController::class,"quest"])->name('steps.test');
Route::get('/steps/{step}/link', [App\Http\Controllers\StepsController::class,"quest"])->name('steps.link');
