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
         $brandCategory->category_icon = $request->category_icon;
 

         $brandCategory->save();
 
         $notification = array(
             'message' => 'Brand Inserted Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->route('view.category')->with($notification);
     }

     public function EditCategory($id)
     {
         $brandCategory = BrandCategory::findOrFail($id);
         return view('backend.brand.category.edit-category', compact('brandCategory'));
     }
 
     public function UpdateCategory(Request $request)
     {
         $brandCategory_id = $request->id;
 
         BrandCategory::findOrFail($brandCategory_id)->update([
             'category_name_en' => $request->category_name_en,
             'category_name_hin' => $request->category_name_hin,
             'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
             'category_slug_hin' => str_replace(' ', '-', $request->category_name_hin),
             'category_icon' => $request->category_icon,
         ]);
 
         $notification = array(
             'message' => 'Brand Updated Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->route('view.category')->with($notification);
     }
 
     public function DeleteCategory($id)
     {
         BrandCategory::findOrFail($id)->delete();
 
         $notification = array(
             'message' => 'Brand Deleted Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
     }
 }
 

