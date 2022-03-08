<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // variables du contexte
        $categoriesId = Category::all('id');

        $countCategory = count($categoriesId);

        Product::factory()
        ->count(6)
        ->create()
        ->each(function($product) use($categoriesId, $countCategory){
            $product->category()->associate($categoriesId[random_int(0, $countCategory - 1)]);
        });
    }
}
