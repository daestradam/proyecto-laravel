<?php

namespace App\Services\Products\Impl;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\Products\ProductService;
use Illuminate\Support\Collection;
use App\DataTransferObjects\Product\StoreProductData;

class ProductServiceImpl implements ProductService
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Product::orderBy('id', 'desc')->get();
    }

    public function show(int $id): Product
    {
        return Product::where('id', $id)->firstOrFail();
    }

    public function destroy(int $id)
    {
        return Product::findOrfail($id)->delete();
    }

    public function store(StoreProductData $storeProductData): Product
    {

        return Product::create($storeProductData->toArray());
    }

    public function update(Request $request, int $id): Product
    {
        $product = Product::findOrfail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image = $request->image;
        $product->id_seller = $request->id_seller;
        $product->save();
        return $product;
    }
}
