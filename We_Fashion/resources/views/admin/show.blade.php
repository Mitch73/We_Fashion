@extends("layouts.admin")
@section("name", $product->name)
@section("content")

	<h1>{{ $product->name }}</h1>

	<img src="{{ asset('') }}" alt="Image de couverture">

	<div>{{ $product->description }}</div>

	{{-- <p><a href="{{ route('product.product.index') }}" title="Retourner aux articles" >Retourner aux ressources des produits</a></p> --}}

@endsection