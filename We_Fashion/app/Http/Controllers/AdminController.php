<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //On récupère tous les produits
        $admin = Product::latest()->get();

        // On transmet les Admin à la vue
        return view("admin.index", compact("admin"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.index', ['product' => $product]);
        return view("admin.create");        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. La validation
        $this->validate($request, [
            'name' => 'required|string|max:255',
            "picture" => 'required|image|max:1024',
            "description" => 'required',
            "price" => 'required|float|max:255',
            "size" => 'required|float|max:255',
            "visibility" => 'required|string|max:255',
            "etat" => 'required|string|max:255'
        ]);

        $path_image = $request->picture->store("admin"); // a voir

        // 3. On enregistre les informations du produit
        Product::create([
            "name" => $request->name,
            "picture" => $path_image,
            "description" => $request->description, // a voir
            "price" => $request->price,
            "size" => $request->size,
            "visibility" => $request->visibility,
            "etat" => $etat
        ]);

        // 4. On retourne vers tous les produits : route("posts.index")
        return redirect(route("admin.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("admin.show", compact("admin"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
