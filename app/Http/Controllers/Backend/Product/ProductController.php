<?php namespace App\Http\Controllers\Backend\Product;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Multiimage;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function ProductAdd(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $subsubcategories = SubSubCategory::latest()->get();
        return view('backend.product.add-product',compact('categories','brands','subcategories','subsubcategories'));    
    }
    
    public function ProductStore(Request $request)
    {
     
        // Handle single image (thumbnail) upload
        if ($request->hasFile('product_thambnail')) {
            $image = $request->file('product_thambnail');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save_url = 'uploads/products/thambnail/' . $name_gen;
            $image->move(public_path('uploads/products/thambnail/'), $name_gen);
        }
    
        // Insert product details
        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_name_hin' => $request->product_name_hin,
            'product_slug_en' => strtolower(str_replace(' ', '-', $request->product_name_en)),
            'product_slug_hin' => str_replace(' ', '-', $request->product_name_hin),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_tags_hin' => $request->product_tags_hin,
            'product_size_en' => $request->product_size_en,
            'product_size_hin' => $request->product_size_hin,
            'product_color_en' => $request->product_color_en,
            'product_color_hin' => $request->product_color_hin,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp_en' => $request->short_descp_en,
            'short_descp_hin' => $request->short_descp_hin,
            'long_descp_en' => $request->long_descp_en,
            'long_descp_hin' => $request->long_descp_hin,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'status' => 1,
            'product_thambnail' => $save_url,
            'created_at' => Carbon::now(),
        ]);
    
        // Handle multiple image uploads
        if ($request->hasFile('multi_image')) {
            $images = $request->file('multi_image');
            foreach ($images as $img) {
                $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                $save_url = 'uploads/products/multi-images/' . $name_gen;
                $img->move(public_path('uploads/products/multi-images/'), $name_gen);
    
                MultiImage::insert([
                    'product_id' => $product_id,
                    'product_image' => $save_url,
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    
        // Prepare notification
        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('product.add')->with($notification);
    }
    public function ProductView()
    {
        $products = Product::latest()->get();
        return view('backend.product.view-product',compact('products'));
    }
   
}