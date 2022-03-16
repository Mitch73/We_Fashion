@extends("layouts.admin")
@section("title", "Tous les articles")
@section("content")

	<h1>Tous les articles</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "admin.create" -->
		<a href="{{ route('admin.create') }}" title="Créer un article" >Créer un nouveau post</a>
	</p>

	<!-- Le tableau pour lister les articles/posts -->
	<table>
		<thead>
			<tr>
				<th>Titre</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Admin -->
			@foreach ($admin as $ad)
			<tr>
				<td>
					<!-- Lien pour afficher un produit : "admin.show" -->
					<a href="{{ route('admin.show', $ad) }}" title="Lire l'article" >{{ $ad->name }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un produit : "admin.edit" -->
					<a href="{{ route('admin.edit', $ad) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un produit : "admin.destroy" -->
					<form method="POST" action="{{ route('admin.destroy', $ad) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
@endsection