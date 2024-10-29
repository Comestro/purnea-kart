<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brands(){
        return $this->hasMany(Product::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
