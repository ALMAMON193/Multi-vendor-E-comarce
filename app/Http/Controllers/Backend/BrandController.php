<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;

class BrandController extends Controller
{
    public  function AllBrand(){
        $brand = Brand::latest()->get();
        return view('backend.brand.view-brand' , compact('brand' ));
    }
    
 
    public function AddBrand(){
        
        return view('backend.brand.add-brand');
    }

public function StoreBrand(Request $request)
{
    $request->validate([
        'brand_name_en' => 'required|unique:brands|max:255',
        'brand_name_hin' => 'required|unique:brands|max:255',
        'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ], [
        'brand_name_en.required' => 'Please Input Brand English Name',
        'brand_name_hin.required' => 'Please Input Brand Hindi Name',
        'brand_image.required' => 'Please Input Brand Image',
    ]);

    $image = $request->file('brand_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    $save_url = 'uploads/'.$name_gen;

    Brand::insert([
        'brand_name_en' => $request->brand_name_en,
        'brand_name_hin' => $request->brand_name_hin,
        'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
        'brand_slug_hin' => str_replace(' ', '-', $request->brand_name_hin),
        'brand_image' => $save_url,
        'created_at' => Carbon::now(),
    ]);

    $notification = array(
            
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'

    );
    return  redirect()->route('all.brand')->with($notification);

   

}




   

    public function EditBrand($id){
        $brand = Brand::findOrFail($id);
        return view('backend.brand.edit-brand', compact('brand'));
    }
       
    
}
