<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubCategory;

class ProductController extends Controller
{
    public function ProductAdd(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $subsubcategories = SubSubCategory::latest()->get();
        return view('backend.product.add-product',compact('categories','brands','subcategories','subsubcategories'));    
    }
    
}
