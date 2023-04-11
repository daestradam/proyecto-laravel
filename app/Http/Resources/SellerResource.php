<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request = null)//toArray(Request $request): array
    {
        return [
            'id' => $this -> id,
            'name' => $this -> name,
            'identification' => $this -> identification,
            'phone_number' => $this -> phone_number,
            'type_product' => $this -> type_product,
            'payment_method' => $this -> payment_method,
        ];
    }
}
