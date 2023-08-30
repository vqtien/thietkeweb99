<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'class_icon',
        'photo_id',
        'sorted'
    ];
}
