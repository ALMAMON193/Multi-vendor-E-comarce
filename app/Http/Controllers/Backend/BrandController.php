<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public  function AllBrand(){
        $brands = Brand::latest()->get();
        return view('backend.brand.view-brand' , compact('brands' ));

    }
    public function AddBrand(){
        return view('backend.brand.add-brand');
    }
    
}
