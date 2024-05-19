<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AllSubCategory(){
        $subcategories = Subcategory::latest()->get();
        return view('backend.brand.subcategory.view-subcategory',compact('subcategories'));
    }

    public function AddSubCategory(){
        return view('backend.brand.subcategory.add-subcategory',compact('categories'));
    }
}
