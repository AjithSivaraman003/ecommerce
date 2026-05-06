<?php

use Illuminate\Support\Facades\Route;
use App\Models\Casual;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {return view('home');});
// Route::get('/productpage', function () {return view('productpage');});
Route::get('/innerproduct', function () {return view('innerproduct');});

// Route::get('/productpage', function () {

//     $products = Casual::all();

//     return view('productpage', compact('products'));
// });
Route::get('/productpage', [ProductController::class, 'index']);
Route::get('/product-add', [ProductController::class, 'create']);

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/dash-product',[ProductController::class, 'indext']);

Route::delete('/product-delete/{id}',[ProductController::class, 'destroy'])->name('product.delete');


Route::put('/product-update/{id}',[ProductController::class, 'update']);


Route::get('/product-edit/{id}',[ProductController::class, 'edit']);