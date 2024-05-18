<?php 
 namespace App\Http\Controllers\Backend\Brand;

 use App\Http\Controllers\Controller;
 use App\Models\BrandCategory;
 use Illuminate\Http\Request;
 
 class BrandCategoryController extends Controller
 {
     public function AllCategory()
     {
         $brandCategory = BrandCategory::latest()->get();
         return view('backend.brand.category.view-category', compact('brandCategory'));
     }
 
     public function AddCategory()
     {
         return view('backend.brand.category.add-category');
     }
 
     public function StoreCategory(Request $request)
     {
         $request->validate([
             'category_name_en' => 'required|string|max:255',
             'category_name_hin' => 'required|string|max:255',
             'category_icon' => 'required|string|max:255',
         ], [
             'category_name_en.required' => 'Please Input Category English Name',
             'category_name_hin.required' => 'Please Input Category Hindi Name',
             'category_icon.required' => 'Please Input Category Icon',
         ]);
 
         $brandCategory = new BrandCategory();
         $brandCategory->category_name_en = $request->category_name_en;
         $brandCategory->category_name_hin = $request->category_name_hin;
         $brandCategory->category_slug_en = strtolower(str_replace(' ', '-', $request->category_name_en));
         $brandCategory->category_slug_hin = str_replace(' ', '-', $request->category_name_hin);
         
         if ($request->hasFile('category_icon')) {
             $file = $request->file('category_icon');
             $extension = $file->getClientOriginalExtension();
             $filename = time() . '.' . $extension;
             $file->move('uploads/brand_category_icon/', $filename);
             $brandCategory->category_icon = $filename;
         } else {
             $brandCategory->category_icon = $request->category_icon;
         }
 
         $brandCategory->save();
 
         $notification = array(
             'message' => 'Brand Inserted Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->route('view.brand')->with($notification);
     }
 }
 
?>