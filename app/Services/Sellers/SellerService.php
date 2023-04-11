<?php

namespace App\Services\Sellers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\DataTransferObjects\Seller\StoreSellerData;

interface SellerService
{
    /**
     * @return Collection
     */
    public function index(): Collection;
    public function show(int $id): Seller;
    public function destroy(int $id);
    public function store(StoreSellerData $storeSellerData): Seller;
    public function update(Request $request, int $id): Seller;
}