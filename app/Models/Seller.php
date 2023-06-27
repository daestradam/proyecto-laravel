<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'id',
        'name',
        'identification',
        'phone_number',
        'type_product',
        'payment_method',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_seller');
    }
}
