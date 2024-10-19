<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function images()
{
    return $this->hasMany(ProductImage::class,"product_id","id");
}

    public function category()
    {
        return $this->hasOne(category::class,"id","category_id");
    }
    

    public function brand()
    {
        return $this->hasOne(brand::class,"id","brand_id");
    }
    
    public function variants()
    {
        return $this->hasMany(Product_Variant::class,"id","product_id");
    }
    

}
