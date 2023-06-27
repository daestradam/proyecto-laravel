<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $seller = new Seller();
        $seller->name = 'Jonathan Mauricio Lopez';
        $seller->identification = 1221723615;
        $seller->phone_number = 3014718821;
        $seller->type_product = 'almuerzo';
        $seller->payment_method = 'efectivo';
        $seller->save();

        $seller = new Seller();
        $seller->name = 'Daniel Estrada Maldonado';
        $seller->identification = 1020486800;
        $seller->phone_number = 3147919510;
        $seller->type_product = 'mixto';
        $seller->payment_method = 'efectivo';
        $seller->save();
    }
}
