<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;

class SubSubCategoryController extends Controller
{
    public function AllSubSubCategory(){
        $subsubcategories = SubSubCategory::latest()->get();
        return view('backend.brand.subsubcategory.view-subsubcategory',compact('subsubcategories'));
    }

    public function AddSubSubCategory(){
        $brandcategories = Category::latest()->get();
        $brandsubcategories = SubSubCategory::latest()->get();
     
        return view('backend.brand.subsubcategory.add-subsubcategory',compact('brandcategories','brandsubcategories'));
    }
}
