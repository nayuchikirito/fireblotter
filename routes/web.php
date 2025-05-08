<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;


Route::get('/', function () {
    return view('index');
});

//User
Route::get('/users', [RegisteredUserController::class, 'index']);
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/user/{id}', [RegisteredUserController::class, 'edit'])->name('users.edit');
Route::put('/user/{id}', [RegisteredUserController::class, 'update']);

//User Log-in
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

