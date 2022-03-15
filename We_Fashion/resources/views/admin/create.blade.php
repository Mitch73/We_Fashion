@extends("layouts.admin")

@section("description")
<span>La page de création de produits</span>
@endsection

@section("title")
Page de création de produits - We Fashion
@endsection

@section('content')
<div class="">
    <h1 class="">
            Créer un nouveau produit</h1>
    <form action="" method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
        <div class="">
            <label for="floatingInput">Entrez le nom du produit</label>
            <input type="text" class="form-control" id="floatingInput" placeholder="Entrez le nom du produit" name="name">
        </div>
        <div class="" style="margin-bottom: 15px">
            <label for="floatingTextarea2">Entrez la description du produit</label>
            <textarea class="form-control" placeholder="Entrez la description du produit" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
        </div>
        <div class="">
            <label for="floatingPassword">Entrez la référence du produit</label>
            <input type="text" class="form-control" id="floatingPassword" placeholder="Entrez la référence du produit" name="reference">
        </div>
        <div class="">
            <label for="floatingPassword">Entrez le prix du produit</label>
            <input type="number" class="form-control" id="floatingPassword" placeholder="Entrez le prix du produit" name="price">
        </div>
        <div class="">
            <label for="floatingSelect">Sélectionnez l'état du produit</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Sélectionner l'état</option>
                <option value="sold">Sold</option>
                <option value="standard">Standard</option>
            </select>
        </div>
        <div class="">
            <label for="floatingSelect">Sélectionnez la taille du produit</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
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
        <div class="">
            <label for="floatingSelect">Sélectionnez la visibilité du produit</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="visibility">
                <option selected disabled>Sélectionner la visibilité</option>
                <option value="publié">publié</option>
                <option value="non publié">non publié</option>
            </select>
        </div>
        
        <input type="file" class="form-control" id="floatingPassword">
        
        <div class="">
            <button class="btn btn-primary" type="button"><span>Créer le produit</span></button>
        </div>
    </form>
</div>
</div>
@endsection