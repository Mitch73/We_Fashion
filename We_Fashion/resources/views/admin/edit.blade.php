@extends("layouts.admin")
@section("description")
<span>La page de modification de produits</span>
@endsection
@section("title")
Page de modification de produits - We Fashion
@endsection
@section("content")

<div class="admin_edit">
    <h1 class="edit_h1">
            Modifier un nouveau produit
    </h1>
    <form class="form_edit" method="post" action="{{ route('product.product.update', $product->id) }}">
		 {{-- Le token CSRF  --}}
		@csrf		
        <div>            
            <label for="product_name">Entrez le nom du produit</label>
            <input type="text" class="form-control" placeholder="Entrez le nom du produit" name="name" value="{{ $product->name }}"  />
        </div>
        <div>
            <label for="product_description">Entrez la description du produit</label>
            <textarea class="form-control" placeholder="Entrez la description du produit" style="height: 100px" name="description"></textarea>
        </div>
        <div>
            <label for="product_reference">Entrez la référence du produit</label>
            <input type="text" class="form-control" placeholder="Entrez la référence du produit" name="reference">
        </div>
        <div>
            <label for="product_price">Entrez le prix du produit</label>
            <input type="number" class="form-control" placeholder="Entrez le prix du produit" name="price">
        </div>
        <div>
            <label for="product_condition">Sélectionnez l'état du produit</label>
            <select class="form-select" aria-label="Floating label select example" name="condition">
                <option selected disabled>Sélectionner l'état</option>
                <option value="sold">Sold</option>
                <option value="standard">Standard</option>
            </select>
        </div>
        <div>
            <label for="product_size">Sélectionnez la taille du produit</label>
            <select class="form-select" aria-label="Example" name="size">
                <option selected disabled>Sélectionner la taille</option>
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="xxl">XXL</option>
                <option value="xxxl">XXXL</option>
            </select>
        </div>
        <div>
            <label for="product_visibility">Sélectionnez la visibilité du produit</label>
            <select class="form-select" aria-label="Select example" name="visibility">
                <option selected disabled>Sélectionner la visibilité</option>
                <option value="publié">publié</option>
                <option value="non publié">non publié</option>
            </select>
        </div>
        
        <input type="file" class="form-control">
        
        <div>
            <button class="btn btn-primary" type="button"><span>Créer le produit</span></button>
        </div>
    </form>
</div>
@endsection