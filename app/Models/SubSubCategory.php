<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_id','category_id','sub_subcategory_name_en','sub_subCategory_name_hin','sub_subcategory_slug_hin','sub_subcategory_slug_en'];
}
