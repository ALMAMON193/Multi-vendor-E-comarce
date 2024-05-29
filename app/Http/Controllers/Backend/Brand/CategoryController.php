<?php 

namespace App\Http\Controllers\Backend\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
 class CategoryController extends Controller
 {
     public function AllCategory()
     {
         $brandCategory = Category::latest()->get();
         return view('backend.brand.category.view-category', compact('brandCategory'));
     }
 
     public function AddCategory()
     {
         return view('backend.brand.category.add-category');
     }
 
     public function StoreCategory(Request $request)
     {
        $request->validate([
            'category_name_en' => 'required',
            'category_name_hin' => 'required',
            'category_icon' => 'required',
        ], [
            'category_name_en.required' => 'Please Input Category English Name',
            'category_name_hin.required' => 'Please Input Category Hindi Name',
            'category_icon.required' => 'Please Input Category Icon',
        ]);

        Category::create([
            'category_name_en' => $request->category_name_en,
            'category_name_hin' => $request->category_name_hin,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_hin' => str_replace(' ', '-', $request->category_name_hin),
            'category_icon' => $request->category_icon,
        ]);

        return redirect()->route('add.category')->with('message', 'Brand Inserted Successfully');
  }

     public function EditCategory($id)
     {
         $brandCategory = Category::findOrFail($id);
         return view('backend.brand.category.edit-category', compact('brandCategory'));
     }
 
     public function UpdateCategory(Request $request)
     {
        $category_id = $request->id;

        Category::findOrFail($category_id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_hin' => $request->category_name_hin,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_hin' => str_replace(' ', '-', $request->category_name_hin),
            'category_icon' => $request->category_icon,
        ]);

        return redirect()->route('view.category')->with('message', 'Brand Updated Successfully');
   }
 
     public function DeleteCategory($id)
     { 
        Category::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Brand Deleted Successfully');
  }
  

}
 

