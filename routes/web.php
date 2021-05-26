<?php

use Illuminate\Support\Facades\Route;


Route::get('/addProduct',[ProductController::class, 'displayProduct']);
Route::post('/addProduct',[ProductController::class, 'addProduct']);
