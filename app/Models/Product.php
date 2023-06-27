<?php

namespace App\Models;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
        'quantity',
        'image',
        'id_seller',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'id_seller');
    }

}
