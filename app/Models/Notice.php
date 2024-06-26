<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'details', 'summary', 'writer', 'information', 'date', 'url', 'language'
    ];

    protected $dates = ['deleted_at'];
}
