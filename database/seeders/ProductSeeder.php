<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $product = new Product();
        $product->name = 'Súper Ácido';
        $product->price = 300;
        $product->quantity = 50;
        $product->image = 'https://cdn.shopify.com/s/files/1/0601/5071/0531/files/image_ce9be4ec-d395-4ad9-a151-03479ff1773f_1200x1200.jpg';
        $product->id_seller = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Salpicón';
        $product->price = 2500;
        $product->quantity = 10;
        $product->image = 'https://frutosnatural.com/wp-content/uploads/2021/08/salpicon.jpg';
        $product->id_seller = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Papas de limón';
        $product->price = 1800;
        $product->quantity = 7;
        $product->image = 'https://copservir.vtexassets.com/arquivos/ids/771951/PAPA-MARGARITA-LIMON_F.png';
        $product->id_seller = 2;
        $product->save();
    }
}
