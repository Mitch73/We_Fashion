@extends("layouts.admin")

@section("description")
<span>La page de création de produits</span>
@endsection

@section("title")
Page de création de produits - We Fashion
@endsection

@section("content")

{{-- <div class="admin_create"> --}}
    <h1 class="create_h1">
            Créer un nouveau produit
    </h1>
    <form class="form_create" method="post" action="{{ route('product.product.store') }}">
        {{-- Le token CSRF --}}
		@csrf
        <div>
            <label for="product_name">Entrez le nom du produit</label>
            <input type="text" class="form-control" id="floatingInput" placeholder="Entrez le nom du produit" name="name">
        </div>
        <div>
            <label for="product_description">Entrez la description du produit</label>
            <textarea class="form-control" placeholder="Entrez la description du produit" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
        </div>
        <div>
            <label for="product_reference">Entrez la référence du produit</label>
            <input type="text" class="form-control" id="floatingPassword" placeholder="Entrez la référence du produit" name="reference">
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
            <input type="submit" class="btn btn-primary" name="valider" value="Valider" >
        </div>
    </form>
{{-- </div> --}}
@endsection