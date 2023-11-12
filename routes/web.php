<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/customers', function () {
    return view('customers.index');
})->name('customers');

Route::get('/products', function () {
    return view('products.index');
})->name('products');

Route::get('/documents', function () {
    return view('documents.index');
})->name('documents');

Route::get('/documenttypes', function () {
    return view('documenttypes.index');
})->name('documenttypes');


Route::resources([
    'customers' => \App\Http\Controllers\CustomersController::class,
    'products' => \App\Http\Controllers\ProductsController::class,
    'documents' => \App\Http\Controllers\DocumentsController::class,
    'documenttypes' => \App\Http\Controllers\DocumenttypesController::class,
]);