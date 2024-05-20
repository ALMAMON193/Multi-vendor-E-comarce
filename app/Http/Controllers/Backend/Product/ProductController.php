<?php

namespace App\Http\Controllers\Backend\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function view(){
        $allProduct = Product::all();
        return view('backend.product.view_product', compact('allProduct'));
    }

    public function add(){
        return view('backend.product.add_product');
    }
}
