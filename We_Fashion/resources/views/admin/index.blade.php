@extends("layouts.admin")

@section("description")
<span>La page de création de produits</span>
@endsection

@section("title")
Page de création de produits - We Fashion
@endsection

@section('content')
<div class="">
    <h1 class="">Créer un nouveau produit</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="">
            <input type="text" class="form-control" id="floatingInput" placeholder="Entrez le nom du produit" name="name">
            <label for="floatingInput">Entrez le nom du produit</label>
        </div>
        <div class="" style="margin-bottom: 15px">
            <textarea class="form-control" placeholder="Entrez la description du produit" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            <label for="floatingTextarea2">Entrez la description du produit</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Entrez la référence du produit" name="reference">
            <label for="floatingPassword">Entrez la référence du produit</label>
        </div>
        <div class="">
            <input type="number" class="form-control" id="floatingPassword" placeholder="Entrez le prix du produit" name="price">
            <label for="floatingPassword">Entrez le prix du produit</label>
        </div>
        <div class="">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Cliquez pour sélectionner l'état du produit</option>
                <option value="sold">Sold</option>
                <option value="standard">Standard</option>
            </select>
            <label for="floatingSelect">Sélectionnez l'état du produit</label>
        </div>
        <div class="">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="visibility">
                <option selected disabled>Cliquez pour sélectionner la visibilité du produit</option>
                <option value="publié">publié</option>
                <option value="non publié">non publié</option>
            </select>
            <label for="floatingSelect">Sélectionnez la visibilité du produit</label>
        </div>
        
        <input type="file" class="form-control" id="floatingPassword">
        
        <div class="">
            <button class="btn btn-primary" type="button"><span>Créer le produit</span></button>
        </div>
    </form>
</div>
</div>
@endsection