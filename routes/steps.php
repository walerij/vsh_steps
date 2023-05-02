<?php


use Illuminate\Support\Facades\Route;


/*CRUD шагов - step-ов*/
Route::get('/teachers/steps/create',  [App\Http\Controllers\StepscrudController::class,"create"])->name('teachers.steps.create');
Route::post('/teachers/steps', [App\Http\Controllers\StepscrudController::class,"store"])->name('teachers.steps.store');
Route::get('/teachers/steps/{step}/createcontent', [App\Http\Controllers\StepscrudController::class,"createcontent"])->name('teachers.steps.createcontent');
Route::post('/teachers/steps/{step}/', [App\Http\Controllers\StepscrudController::class,"storecontent"])->name('teachers.steps.storecontent');
