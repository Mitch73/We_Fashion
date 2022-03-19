@extends("layouts.admin")
{{-- @section("name", $product->name) --}}
@section("content")

	{{-- <img src="{{ asset('') }}" alt="Image de couverture"> --}}

	<h1>{{ $product->name }}</h1>


	<div>
		{{ $product->description }}
		{{ $product->price }}
		{{ $product->size }}
		{{ $product->visibility }}
		{{ $product->etat }}
	</div>

	<p><a href="{{ route('product.product.index') }}" title="Retourner aux articles" >Retourner aux ressources des produits</a></p>

@endsection