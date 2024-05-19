<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use App\Models\BrandCategory;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AllSubCategory(){
     
        $subcategories = Subcategory::latest()->get();
        return view('backend.brand.subcategory.view-subcategory',compact('subcategories,brandcategories'));
    }

    public function AddSubCategory(){
        $brandcategories = BrandCategory::orderBy('category_name_en','ASC')->get();
        $subcategories = Subcategory::latest()->get();
        return view('backend.brand.subcategory.add-subcategory' , compact('brandcategories','subcategories'));
    }
}
