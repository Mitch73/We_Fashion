@extends("layouts.admin")
@section("title", "Tous les articles")
@section("content")

	{{-- <h1>Tous les articles</h1> --}}
	<h5 class="admin_index">
		{{-- Lien pour créer un nouveau produit : "product.product.create" --}}
		<a href="{{ route('product.product.create') }}" title="Créer un article" >Créer un nouveau produit</a>
	</h5>
	{{-- Le tableau pour lister les produits --}}
	<table>
		<thead>
			<tr class="name_operations">
				<th class="admin_name">Name</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			{{-- On parcourt la collection de Admin --}}
			@foreach ($products as $product)
			<tr class="admin_modifier">
				<td>
					{{-- Lien pour afficher un produit : "admin.show" --}}
					<a href="{{ route('product.product.show', $product) }}" title="Lire l'article" >{{ $product->name }}</a>
				</td>
				<td>
					{{-- Lien pour modifier un produit : "admin.edit" --}}
					<a href="{{ route('product.product.edit', $product) }}" title="Modifier l'article" >MODIFIER</a>
				</td>
				<td>
					{{-- Formulaire pour supprimer un produit : "admin.destroy" --}}
					<form method="POST" action="{{ route('product.product.destroy', $product) }}" >
						{{-- CSRF token --}}
						@csrf
						{{-- <input type="hidden" name="_method" value="DELETE"> --}}
						@method("DELETE")

						<input type="submit" value="Supprimer" class="admin_supprimer">
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
@endsection