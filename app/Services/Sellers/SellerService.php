<?php

namespace App\Services\Sellers;

use Illuminate\Support\Collection;

interface SellerService
{
    /**
     * @return Collection
     */
    public function index(): Collection;
}