<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Popup extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
      'title', 'image', 'link', 'order'
    ];

    protected $dates = ['deleted_at'];

    protected static function booted(){
        static::creating(function($popup){
            $maxOrder = Popup::max('order');
            $popup->order = $maxOrder + 1;
        });
    }
}
