<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    
    
    public function index(){
        // on va appeler les différents products
        return view('products.index', ['products' => Product::all()]);
    }

    public function product($id){
        $product = Product::find($id);
        dd($product);
        return view('products.product', ['products' => $product]);
    }

    public function showSex(string $name){
        // on va appeler les différents categories
        $category = Category::where('sex', $name)->get();

        $products = [];
        // récuperé les ids des categories hommes et femmes
        if(count($category) > 0){
            $products = $category[0]->products;
        }
        // on retourne les products dans chaque category
        return view("categories.index", ['products' => $products, 'category' => $category]);

    }

    /**controller pour la partie admin */
    // page admin
    // public function admin(Product $product) {
    //     return view('admin.index', ['product' => $product]);
    // }
    
    // création de nouveau produit
    // public function new_product(Product $product){
    //     return view('admin.index', ['product' => $product]);
    // }
}
