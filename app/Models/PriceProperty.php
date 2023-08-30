<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceProperty extends Model
{
    use HasFactory;
    protected $table = 'price_property';

    protected $fillable = [
        'price_id',
        'property_id',
    ];
}
