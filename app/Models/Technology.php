<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'class_icon',
        'photo_id',
        'description',
        'content',
        'sorted',
    ];

    public function photo()
    {
        $instance = $this->belongsTo('App\Models\Photo'); 
        return $instance->select('photos.id', 'photo_path');
    }
    
}
