<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reviewController extends Controller
{
    //
    public function index(){
        $reviews = \App\Models\Review::all();
        return view('home', compact('reviews'));
    }
}