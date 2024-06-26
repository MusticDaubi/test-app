<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($category, $product = null) {
        return view('Product', ['product' => $product]);
    }
}
