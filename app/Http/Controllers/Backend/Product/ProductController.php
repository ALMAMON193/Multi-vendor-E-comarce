<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubCategory;

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
        {
            // Validate the request data
            $validatedData = $request->validate([
                'brand_id' => 'required|integer',
                'category_id' => 'required|integer',
                'subcategory_id' => 'required|integer',
                'subsubcategory_id' => 'required|integer',
                'product_name_en' => 'required|string|max:255',
                'product_name_hin' => 'required|string|max:255',
                'product_code' => 'required|string|max:255',
                'product_qty' => 'required|integer',
                'product_tags_en' => 'required|string',
                'product_tags_hin' => 'required|string',
                'product_size_en' => 'required|string',
                'product_size_hin' => 'required|string',
                'product_color_en' => 'required|string',
                'product_color_hin' => 'required|string',
                'selling_price' => 'required|numeric',
                'discount_price' => 'required|numeric',
                'short_descp_en' => 'required|string',
                'short_descp_hin' => 'required|string',
                'long_descp_en' => 'required|string',
                'long_descp_hin' => 'required|string',
                'product_thambnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'hot_deals' => 'required|boolean',
                'featured' => 'required|boolean',
                'special_offer' => 'required|boolean',
                'special_deals' => 'required|boolean',
            ], [
                // Custom error messages can be specified here
                'brand_id.required' => 'The brand id is required.',
                'category_id.required' => 'The category id is required.',
                'subcategory_id.required' => 'The subcategory id is required.',
                'subsubcategory_id.required' => 'The sub-subcategory id is required.',
                'product_name_en.required' => 'The product name in English is required.',
                'product_name_hin.required' => 'The product name in Hindi is required.',
                'product_code.required' => 'The product code is required.',
                'product_qty.required' => 'The product quantity is required.',
                'product_tags_en.required' => 'The product tags in English are required.',
                'product_tags_hin.required' => 'The product tags in Hindi are required.',
                'product_size_en.required' => 'The product size in English is required.',
                'product_size_hin.required' => 'The product size in Hindi is required.',
                'product_color_en.required' => 'The product color in English is required.',
                'product_color_hin.required' => 'The product color in Hindi is required.',
                'selling_price.required' => 'The selling price is required.',
                'discount_price.required' => 'The discount price is required.',
                'short_descp_en.required' => 'The short description in English is required.',
                'short_descp_hin.required' => 'The short description in Hindi is required.',
                'long_descp_en.required' => 'The long description in English is required.',
                'long_descp_hin.required' => 'The long description in Hindi is required.',
                'product_thambnail.required' => 'The product thumbnail is required.',
                'product_thambnail.image' => 'The product thumbnail must be an image.',
                'product_thambnail.mimes' => 'The product thumbnail must be a file of type: jpg, jpeg, png, gif.',
                'product_thambnail.max' => 'The product thumbnail may not be greater than 2048 kilobytes.',
                'hot_deals.required' => 'The hot deals field is required.',
                'hot_deals.boolean' => 'The hot deals field must be true or false.',
                'featured.required' => 'The featured field is required.',
                'featured.boolean' => 'The featured field must be true or false.',
                'special_offer.required' => 'The special offer field is required.',
                'special_offer.boolean' => 'The special offer field must be true or false.',
                'special_deals.required' => 'The special deals field is required.',
                'special_deals.boolean' => 'The special deals field must be true or false.',
            ]);
            
            

    }
  }
    
}
