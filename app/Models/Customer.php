<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'photo_id',        
    ];

    public function photo()
    {
        $instance = $this->belongsTo('App\Models\Photo'); 
        return $instance->select('photos.id', 'photo_path');
    }
}
