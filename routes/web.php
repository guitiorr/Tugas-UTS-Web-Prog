<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/main', function (){
//     return view('main-page');
// });

Route::get('/main', [MainPageController::class, 'index']);
