<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_id','category_id','sub_subcategory_name_en','sub_subCategory_name_hin','sub_subcategory_slug_hin','sub_subcategory_slug_en'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }

    
}
