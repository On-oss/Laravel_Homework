<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Sign Up Form Routes
use App\Http\Controllers\SignUpController;
Route::get('/signup', function () {
    return view('signUp');
});

Route::post('/signup', [SignUpController::class, 'store']);

//Clear SessionSession
use Illuminate\Support\Facades\Session;

Route::post('/clear-session', function () {
    Session::forget('users');
    return redirect()->back();
});



//Show API data
use App\Http\Controllers\ShowAPI;
Route::get('/show-api', [ShowAPI::class, 'getData']);


