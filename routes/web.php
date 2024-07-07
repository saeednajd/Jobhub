<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController, App\Http\Controllers\SessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;

//main page
Route::get('/', [JobController::class, 'index']);
//search page
Route::get('/search', SearchController::class);
//tag search
Route::get('/tags/{tag:name}', TagController::class);


//create a Job
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');


Route::middleware('guest')->group(function () {
    //register
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    //login and logout
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');
