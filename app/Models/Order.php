<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasMany;

class Order extends Model
{
    use HasFactory;

    // Add 'user_id' to the $fillable property
    protected $fillable = [
        'user_id',
        'isOrdered',
    ];
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }
}
