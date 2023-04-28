<?php


use Illuminate\Support\Facades\Route;



/*Добавление ролей пользователям*/
Route::get('/roleadmin/userrole/',  [App\Http\Controllers\UserrolecrudController::class,"index"])->name('roleadmin.userrole');
//Route::get('/roleadmin/userrole/create',  [App\Http\Controllers\UserrolecrudController::class,"create"])->name('roleadmin.userrole.create');
Route::get('/roleadmin/userrole/{user}', [App\Http\Controllers\UserrolecrudController::class,"show"])->name('roleadmin.userrole.show');
