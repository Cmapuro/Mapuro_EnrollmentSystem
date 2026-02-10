<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);
>>>>>>> c4e9f2e (Initial commit)
