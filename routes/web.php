<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,"welcome"]) ->name("welcoem");

Route::get('/about', function () {
    return view("about");
});

Route::get("/contact", function(){
    return view("contact");
});