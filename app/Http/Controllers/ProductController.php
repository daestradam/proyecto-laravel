<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Products\ProductService;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\DataTransferObjects\Product\StoreProductData;

class ProductController extends Controller
{
    public function __construct(protected ProductService $productService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ProductCollection($this->productService->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {

        return response()->json(
            new ProductResource(
                $this->productService->store(StoreProductData::from($request))
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return response()->json($this->productService->show($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        return response()->json($this->productService->update($request, $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return response()->json($this->productService->destroy($id));
    }
}
