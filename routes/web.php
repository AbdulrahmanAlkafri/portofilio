<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\reviewController;
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

Route::get('/contact',[QuestionController::class,"index"])->name('contact');