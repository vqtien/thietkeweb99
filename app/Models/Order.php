<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'description',
        'completed',
    ];

    public function order_details()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
