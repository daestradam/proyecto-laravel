<?php

namespace App\Services\Sellers\Impl;

use App\Models\Seller;
use Illuminate\Http\Request;
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

    public function destroy(int $id)
    {
        return Seller::findOrfail($id)->delete();
    }

    public function store(Request $request): Seller
    {
        $seller = new Seller();
        $seller->name = $request->name;
        $seller->identification = $request->identification;
        $seller->phone_number = $request->phone_number;
        $seller->type_product = $request->type_product;
        $seller->payment_method = $request->payment_method;
        $seller->save();
        return $seller;
    }

    public function update(Request $request, int $id): Seller
    {
        $seller = Seller::findOrfail($id);
        $seller->name = $request->name;
        $seller->identification = $request->identification;
        $seller->phone_number = $request->phone_number;
        $seller->type_product = $request->type_product;
        $seller->payment_method = $request->payment_method;
        $seller->save();
        return $seller;
    }
}
