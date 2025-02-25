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


//Mock API routes
// use App\Http\Controllers\ProductController;

// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


