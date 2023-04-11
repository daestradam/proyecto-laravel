<?php

namespace App\Models;

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
}
