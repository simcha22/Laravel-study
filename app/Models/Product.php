<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function createProduct($requst){
        $product = new self();
        $product->name = $requst->name;
        $product->price = $requst->price;
        $product->information = $requst->information;
        $product->save();
    }

    public static function getAllProducts(){
        return self::orderBy('name')->get();
    }

    public static function getProduct($id){
        return self::where($id)->firstOrFail();
    }
}
