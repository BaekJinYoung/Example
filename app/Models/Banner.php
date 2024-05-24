<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'mobile_title', 'subtitle', 'mobile_subtitle', 'details', 'mobile_details', 'image', 'mobile_image', 'order', 'image_name', 'mobile_image_name'
    ];

    protected $dates = ['deleted_at'];

    protected static function booted(){
        static::creating(function ($banner) {
            $maxOrder = Banner::max('order');
            $banner->order = $maxOrder + 1;
        });
    }
}
