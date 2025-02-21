<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Sign Up Form Routes
use App\Http\Controllers\SignUpController;

Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'displayInfor']);
