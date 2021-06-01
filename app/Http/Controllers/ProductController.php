<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function displayProduct(){
        return view('products.add');
    }

    public function addProduct(ProductRequest $request){
        Product::createProduct($request);
    }
}
