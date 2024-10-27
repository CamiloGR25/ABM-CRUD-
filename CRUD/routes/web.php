<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//rutas de metodos UserController
Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('welcome');
});
