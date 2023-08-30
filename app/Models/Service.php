<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'slug',
        'description',
        'sorted',
        'photo_id',
        'content',
    ];

    public function photo()
    {
        $instance = $this->belongsTo('App\Models\Photo'); 
        return $instance->select('photos.id', 'photo_path');
    }
}
