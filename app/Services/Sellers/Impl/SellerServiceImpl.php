<?php

namespace App\Services\Sellers\Impl;

use App\Models\Seller;
use App\Services\Sellers\SellerService;
use Illuminate\Support\Collection;

class SellerServiceImpl implements SellerService
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Seller::orderBy('id', 'desc')->get();
    }

    public function show(int $id): Seller
    {
        return Seller::where('id', $id)->firstOrFail();
    }

}
