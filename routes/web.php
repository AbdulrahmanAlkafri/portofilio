<?php

use App\Http\Controllers\questionController;
use App\Http\Controllers\reviewController;
use App\Models\Question;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;  

Route::get("/",[reviewController::class,"index"])->name("home");

Route::get('/register-mark', function () {  
    return view('register-mark'); 
})->name('register-mark');  

Route::get('/invest', function () {  
    return view('invest');
})->name('invest');  

Route::get('/platforms', function () {  
    return view('platforms');
})->name('platforms');  

Route::get('/contact',[questionController::class,"index"])->name('contact');