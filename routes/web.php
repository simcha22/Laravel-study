<?php

use Illuminate\Support\Facades\Route;


Route::get('/addProdec',[ProductController::class, 'displayProduct']);
Route::post('/addProdec',[ProductController::class, 'addProduct']);
