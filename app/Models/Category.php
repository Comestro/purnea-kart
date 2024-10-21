<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Str;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parent():HasOne
    {
        return $this->hasOne(Category::class,'id','parent_id');
    }
    public function children():HasMany
    {
        return $this->hasMany(Category::class,'parent_id');
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
