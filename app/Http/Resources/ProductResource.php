<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'price' => $this -> price,
            'quantity' => $this -> quantity,
            'image' => $this -> image,
            'id_seller' => $this -> id_seller,
        ];
    }
}
