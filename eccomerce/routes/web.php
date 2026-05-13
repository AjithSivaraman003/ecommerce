<?php

use Illuminate\Support\Facades\Route;
use App\Models\Casual;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view ('welcome');
});

Route::get('/home', function () {return view('home');});
// Route::get('/productpage', function () {return view('productpage');});



Route::get('/productpage', [ProductController::class, 'index']);
Route::get('/product-add', [ProductController::class, 'create']);

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/dash-product',[ProductController::class, 'indext']);

Route::delete('/product-delete/{id}',[ProductController::class, 'destroy'])->name('product.delete');


Route::put('/product-update/{id}',[ProductController::class, 'update']);


Route::get('/product-edit/{id}',[ProductController::class, 'edit']);

//innerproduct
Route::get('/innerproduct', function () {return view('innerproduct');});

Route::get('/innerproduct/{id}', [ProductController::class, 'show']);

Route::get('cart', function () {
    return view ('cart');
});


//cart session 

Route::post('/cart/store',
    [CartController::class, 'store']);

Route::get('/cart',
    [CartController::class, 'index']);



















//regester and login session

Route::post('/register-save',
    [AuthController::class, 'register']);

 Route::get('/register', function () {

    return view('register');

});

Route::get('/login', function () {

    return view('loginpage');

});

Route::post('/login-check',
    [AuthController::class, 'login']);

Route::get('/logout',
    [AuthController::class, 'logout']);