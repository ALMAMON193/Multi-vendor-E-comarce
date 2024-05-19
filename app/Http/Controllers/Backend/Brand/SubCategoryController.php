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
        return view('backend.brand.subcategory.view-subcategory',compact('subcategories'));
    }

    public function AddSubCategory(){
        $brandcategories = BrandCategory::orderBy('category_name_en','ASC')->get();
        $subcategories = Subcategory::latest()->get();
        return view('backend.brand.subcategory.add-subcategory' , compact('brandcategories','subcategories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name_en' =>'required',
            'subcategory_name_hin' =>'required',
            'category_id' =>'required',
        ],[
            'subcategory_name_en.required' =>'Please Input Subcategory English Name',
            'subcategory_name_hin.required' =>'Please Input Subcategory Bangla Name',
            'category_id.required' =>'Please Select Category',
           
        ]);
        $subcategories = new Subcategory();
        $subcategories->subcategory_name_en = $request->subcategory_name_en;
        $subcategories->subcategory_name_hin = $request->subcategory_name_hin;
        $subcategories->subcategory_slug_en = strtolower(str_replace(' ', '-', $request->subcategory_slug_en));
        $subcategories->subcategory_slug_hin = str_replace(' ', '-', $request->subcategory_slug_hin);
           
        $subcategories->category_id = $request->category_id;
        $subcategories->save();
        $notification = array(
            'message' => 'Subcategory Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.subcategory')->with($notification);
    }

    public function EditSubCategory($id){
        $brandcategories = BrandCategory::orderBy('category_name_en','ASC')->get();
        $subcategories = Subcategory::findOrFail($id);
        return view('backend.brand.subcategory.edit-subcategory',compact('brandcategories','subcategories'));
    }
    public function UpdateSubCategory(Request $request){
        $subcategory_id = $request->id;
        $request->validate([
            'subcategory_name_en' =>'required',
            'subcategory_name_hin' =>'required',
            'category_id' =>'required',
        ],[
            'subcategory_name_en.required' =>'Please Input Subcategory English Name',
            'subcategory_name_hin.required' =>'Please Input Subcategory hindi Name',
            'category_id.required' =>'Please Select Category',
           
        ]);
        $subcategories = Subcategory::findOrFail($subcategory_id);
        $subcategories->subcategory_name_en = $request->subcategory_name_en;
        $subcategories->subcategory_name_hin = $request->subcategory_name_hin;

        $subcategories->subcategory_slug_en = strtolower(str_replace(' ', '-', $request->subcategory_slug_en));
        $subcategories->subcategory_slug_hin = str_replace(' ', '-', $request->subcategory_slug_hin);
        $subcategories->category_id = $request->category_id;
        $subcategories->save();
        $notification = array(
            'message' => 'Subcategory Updated Successfully',

            'alert-type' => 'success'
        );
        return redirect()->route('view.subcategory')->with($notification);
    }

    public function DeleteSubCategory($id){
        $subcategories = Subcategory::findOrFail($id);
        $subcategories->delete();
        $notification = array(
            'message' => 'Subcategory Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
