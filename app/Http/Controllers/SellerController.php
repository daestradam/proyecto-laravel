<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Services\Sellers\SellerService;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Resources\SellerCollection;
use App\Http\Resources\SellerResource;
use App\DataTransferObjects\Seller\StoreSellerData;

class SellerController extends Controller
{   
    public function __construct(protected SellerService $sellerService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new SellerCollection($this->sellerService->index());
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
     * @param  \App\Http\Requests\StoreSellerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {

        return response()->json(
            new SellerResource(
                $this->sellerService->store(StoreSellerData::from($request))
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return response()->json($this->sellerService->show($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerRequest  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        return response()->json($this->sellerService->update($request, $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return response()->json($this->sellerService->destroy($id));
    }
}
