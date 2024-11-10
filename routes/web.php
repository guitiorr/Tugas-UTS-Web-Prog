<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/main', function (){
//     return view('main-page');
// });

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{post:id}', [PostController::class, 'show']);
