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
        'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
       
    ], [
        'brand_name_en.required' => 'Please Input Brand English Name',
        'brand_name_hin.required' => 'Please Input Brand Hindi Name',
        'brand_image.required' => 'Please Input Brand Image',
    ]);

    $brand = new Brand();
    $brand->brand_name_en = $request->brand_name_en;
    $brand->brand_name_hin = $request->brand_name_hin;
    $brand->brand_slug_en = strtolower(str_replace(' ', '-', $request->brand_name_en));
    $brand->brand_slug_hin = str_replace(' ', '-', $request->brand_name_hin);

    // image upload
    if ($request->hasFile('brand_image')) {
        $file = $request->file('brand_image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('uploads/brand_image/'), $filename);
        
        $brand->brand_image = $filename;
    }
    $brand->save();
    $notification = array(
            
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'

    );
    return  redirect()->route('all.brand')->with($notification);

   

}
public function EditBrand($id) {
    $brand = Brand::findOrFail($id);
    return view('backend.brand.edit-brand', compact('brand'));
}
       
    public function UpdateBrand(Request $request)
    {
        $brand_id = $request->id;
        $old_image = $request->old_image;

        if ($request->hasFile('brand_image')) {
            $file = $request->file('brand_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/brand_image/'), $filename);

            unlink(public_path('uploads/brand_image/' . $old_image));
            $brand = Brand::findOrFail($brand_id);
            $brand->brand_image = $filename;
            $brand->save();
        }

        $brand = Brand::findOrFail($brand_id);
        $brand->brand_name_en = $request->brand_name_en;
        $brand->brand_name_hin = $request->brand_name_hin;

        $brand->brand_slug_en = strtolower(str_replace(' ', '-', $request->brand_name_en));
        $brand->brand_slug_hin = str_replace(' ', '-', $request->brand_name_hin);
        $brand->save();

        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification);
    }
    public function DeleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $old_image = $brand->brand_image;
        unlink(public_path('uploads/brand_image/' . $old_image));
        $brand->delete();

        return redirect()->route('all.brand')->with('success', 'Brand deleted successfully');
    }
}
