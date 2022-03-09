<?php

namespace Database\Seeders;

use App\Models\Category;
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
    public function run()
    {
        // variables du contexte
        $categoriesId = Category::all('id');

        $countCategory = count($categoriesId);

        Product::factory()
        ->count(10)
        ->create()
        ->each(function($product) use($categoriesId, $countCategory){
            // $rand = random_int(2, $countCategory);
            // On utilise la collection = méthodes Laravel pour traiter les entités comme des tableaux 
            // shuffle mélange le tableau d'entités, slice permet de découper de manière aléatoire ici
            // $categoriesShuffle = $categoriesId->shuffle()->slice($rand);
            // Pour la méthode attach nous devons passer des ids sous forme d'un tableau
            // $ids = [];
            // foreach($categoriesShuffle as $k => $array){
            //     $ids[] = $array["id"];
            // }
            $product->categories()->attach($categories);

            $product->save();
        });
    }
}
