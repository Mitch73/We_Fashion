@extends("layouts.admin")
@section("name", $product->name)
@section("content")

	{{-- <img src="{{ asset('') }}" alt="Image de couverture"> --}}

	<div class="admin_show">
		<h6>{{ $product->name }}</h6>

		<ul>
			<li>{{ $product->reference}}</li>
			<li>{{ $product->description}}</li>
			<li>{{ $product->price}}</li>
			<li>{{ $product->size}}</li>
			<li>{{ $product->visibility}}</li>
			<li>{{ $product->etat}}</li>
		</ul>
		
	</div>

	{{-- <p><a href="{{ route('product.product.index') }}" title="Retourner aux articles" >Retourner aux ressources des produits</a></p> --}}

@endsection