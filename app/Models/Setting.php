<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_logo',
        'meta_theme',
        'banner',
        'copyright',
    ];
}
