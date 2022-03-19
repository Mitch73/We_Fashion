@extends("layouts.admin")
@section("description")
<span>La page de modification de produits</span>
@endsection
@section("title")
Page de modification de produits - We Fashion
@endsection
@section("content")

{{-- <div class="admin_edit">
    <h1 class="edit_h1">
            Modifier un nouveau produit
    </h1>
    <form class="form_edit" method="post" action="{{ route('product.product.update', $product->id) }}" enctype="multipart/form-data"> --}}
		 {{-- Le token CSRF  --}}
		{{-- @csrf		
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
            <button class="btn btn-primary" type="button">Créer le produit</button>
        </div>
    </form>
</div> --}}
{{-- ******************************************************************************************************* --}}
{{-- ******************************************************************************************************* --}}
{{-- ******************************************************************************************************* --}}
{{-- ******************************************************************************************************* --}}

<h1>Editer un produit</h1>

	<!-- Si nous avons un Post $post -->
	@if (isset($product))

	<!-- Le formulaire est géré par la route "posts.update" -->
	<form method="POST" action="{{ route('product.product.update', $product) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('product.product.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf
        <div>
			<!-- S'il y a un $post->name, on complète la valeur de l'input -->   
            <div>        
                {{--Le message d'erreur pour "name" --}}
                <label for="product_name">Entrez le nom du produit</label>
                <input type="text" class="form-control" placeholder="Entrez le nom du produit" name="name" value="{{ $product->name }}">  
                @error("name")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="product_description">Entrez la description du produit</label>
                <textarea class="form-control" placeholder="Entrez la description du produit" style="height: 100px" name="description"></textarea>
                @error("description")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="product_reference">Entrez la référence du produit</label>
                <input type="text" class="form-control" placeholder="Entrez la référence du produit" name="reference">
                @error("reference")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="product_price">Entrez le prix du produit</label>
                <input type="number" class="form-control" placeholder="Entrez le prix du produit" name="price">
                @error("price")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="product_condition">Sélectionnez l'état du produit</label>
                <select class="form-select" aria-label="Floating label select example" name="condition">
                    <option selected disabled>Sélectionner l'état</option>
                    <option value="sold">Sold</option>
                    <option value="standard">Standard</option>
                </select>
                @error("condition")
                <div class="text-danger">{{ $message }}</div>
                @enderror
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
                @error("size")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="product_visibility">Sélectionnez la visibilité du produit</label>
                <select class="form-select" aria-label="Select example" name="visibility">
                    <option selected disabled>Sélectionner la visibilité</option>
                    <option value="publié">publié</option>
                    <option value="non publié">non publié</option>
                </select>
                    @error("visibility")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

			{{-- <!-- Le message d'erreur pour "content" --> --}}
			{{-- @error("content")
			<div>{{ $message }}</div>
			@enderror --}}

		{{-- <!-- S'il y a une image $post->picture, on l'affiche --> --}}
		{{-- @if(isset($product->picture))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$post->picture) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif --}}

		<div>
        <input type="file" class="form-control" name="picture" id="picture" >

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div class="text-danger">{{ $message }}</div>
			@enderror
        </div>

		<input type="submit" class="btn btn-primary" name="valider" value="Valider" >
    </div>
	</form>
@endsection