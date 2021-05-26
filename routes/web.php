<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/addProduct',[ProductController::class, 'displayProduct']);
Route::post('/addProduct',[ProductController::class, 'addProduct']);
