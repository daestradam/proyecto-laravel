<?php

namespace App\DataTransferObjects\Product;

use Spatie\LaravelData\Data;

class StoreProductData extends Data
{
    public function __construct(
        public string $name,
        public int $price,
        public int $quantity,
        public string $image,
        public int $id_seller
    ) 
    {
    }

    public static function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:25',
            'price' => 'required|int|min:3',
            'id_seller' => 'required|exists:sellers,id',
        ];
    }
}