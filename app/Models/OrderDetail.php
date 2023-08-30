<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'price_id',
        'content'
    ];

    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }
}
