<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug',
        'photo_id',
        'blog_type_id',
        'description',
        'content',
        'user_id',
    ];

    public function photo()
    {
        $instance = $this->belongsTo('App\Models\Photo'); 
        return $instance->select('photos.id', 'photo_path');
    }
}
