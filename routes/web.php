<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mainMenuController;
use App\Http\Controllers\UserController;



Route::get('/', [mainMenuController::class, 'login'])->name('login');

Route::post('/doLogin', [mainMenuController::class, 'doLogin'])->name('doLogin'); //ruta que viene con algo
//////////////Nombre de Google////////////////Funcion/////////////nombre de la ruta///
Route::get('/userList', [UserController::class, 'userList'])->name('rutUserList');

Route::post('/createUser', [UserController::class, 'createUser'])->name('rutCtrateUser');
