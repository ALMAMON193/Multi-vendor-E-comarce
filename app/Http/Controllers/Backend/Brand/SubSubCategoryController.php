<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;

class SubSubCategoryController extends Controller
{
    public function AllSubSubCategory(){
        $subsubcategories = SubSubCategory::latest()->get();
        return view('backend.brand.subsubcategory.view-subsubcategory',compact('subsubcategories'));
    }

    public function AddSubSubCategory(){
        $brandcategories = Category::orderBy('category_name_en','ASC')->latest()->get();
        $brandsubcategories = Subcategory::orderBy('subcategory_name_en','ASC')->latest()->get();
        
        return view('backend.brand.subsubcategory.add-subsubcategory',compact('brandcategories','brandsubcategories'));
    }
 
    public function StoreSubSubCategory(Request $request){

        $request->validate([
            'sub_subcategory_name_en' => 'required',
            'sub_subcategory_name_hin' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
        ], [
            'sub_subcategory_name_en.required' => 'Please Input Sub Sub Category English Name',
            'sub_subcategory_name_hin.required' => 'Please Input Sub Sub Category Hindi Name',
            'category_id.required' => 'Please Select Category',
            'sub_category_id.required' => 'Please Select Sub Category',
        ]);
    
        $subsubcategories = new SubSubCategory();
        $subsubcategories->sub_subcategory_name_en = $request->sub_subcategory_name_en;
        $subsubcategories->sub_subcategory_name_hin = $request->sub_subcategory_name_hin;
        $subsubcategories->sub_subcategory_slug_en = strtolower(str_replace(' ', '-', $request->sub_subcategory_name_en));
        $subsubcategories->sub_subcategory_slug_hin = str_replace(' ', '-', $request->sub_subcategory_name_hin);
        $subsubcategories->category_id = $request->category_id;
        $subsubcategories->sub_category_id = $request->sub_category_id;
        $subsubcategories->save();
    
        $notification = array(
            'message' => 'Sub Sub Category Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('add.subsubcategory')->with($notification);
     }

     public function EditSubSubCategory($id){
        $brandcategories = Category::orderBy('category_name_en','ASC')->latest()->get();
        $brandsubcategories = Subcategory::orderBy('subcategory_name_en','ASC')->latest()->get();
        $subsubcategories = SubSubCategory::findOrFail($id);
        return view('backend.brand.subsubcategory.edit-subsubcategory',compact('brandcategories','brandsubcategories','subsubcategories'));
     }

     public function UpdateSubSubCategory(Request $request){

        $subsubcategory_id = $request->id;
        $request->validate([
            'sub_subcategory_name_en' => 'required',
            'sub_subcategory_name_hin' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
        ], [
            'sub_subcategory_name_en.required' => 'Please Input Sub Sub Category English Name',

            'sub_subcategory_name_hin.required' => 'Please Input Sub Sub Category Hindi Name',
            
            'category_id.required' => 'Please Select Category',
            
            'sub_category_id.required' => 'Please Select Sub Category',
        ]);
    
        SubSubCategory::findOrFail($subsubcategory_id)->update
        ([
            'sub_subcategory_name_en' => $request->sub_subcategory_name_en,
            'sub_subcategory_name_hin' => $request->sub_subcategory_name_hin,
            'sub_subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->sub_subcategory_name_en)),
            'sub_subcategory_slug_hin' => str_replace(' ', '-', $request->sub_subcategory_name_hin),
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
        ]);
    
        $notification = array(
            'message' => 'Sub Sub Category Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('view.subsubcategory')->with($notification);
     }

     public function DeleteSubSubCategory($id){
        SubSubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sub Sub Category Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
     }
 
     

}
