<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\HomeController;

Route::get('/', function () {
    return view('Home');
});

route::get('/home', [HomeController::class,'index']);
