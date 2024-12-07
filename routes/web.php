<?php

use App\Http\Controllers\InvestController;
use App\Http\Controllers\QuestionairController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\reviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;  

Route::get("/",[reviewController::class,"index"])->name("home");

Route::get('/register-mark', function () {  
    return view('register-mark'); 
})->name('register-mark');  
Route::post('/register-mark', [QuestionairController::class, 'store'])->name('register-mark');  

Route::get('/invest', function () {  
    return view('invest');
})->name('invest');  
Route::post("/invest",[InvestController::class,"store"])->name("invest");
Route::get('/platforms', function () {  
    return view('platforms');
})->name('platforms');  

Route::get('/contact',[QuestionController::class,"index"])->name('contact');
use App\Http\Controllers\ContactController;  
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');