<?php

namespace App\DataTransferObjects\Seller;

use Spatie\LaravelData\Data;

class StoreSellerData extends Data
{
    public function __construct(
        public string $name,
        public int $identification,
        public string $phone_number,
        public string $type_product,
        public string $payment_method
    ) 
    {
    }

    public static function rules(): array
    {
        return [
            'name' => 'required|string|min:10|max:40',
            'phone_number' => 'required|string:11',
        ];
    }
}