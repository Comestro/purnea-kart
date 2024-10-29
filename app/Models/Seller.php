<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    protected $guarded = [];
    
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
