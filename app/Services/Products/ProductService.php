<?php

namespace App\Services\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\DataTransferObjects\Product\StoreProductData;

interface ProductService
{
    /**
     * @return Collection
     */
    public function index(): Collection;
    public function show(int $id): Product;
    public function destroy(int $id);
    public function store(StoreProductData $storeProductData): Product;
    public function update(Request $request, int $id): Product;
}