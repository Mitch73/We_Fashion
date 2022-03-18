@extends("layouts.admin")
@section("name", $ad->name)
@section("content")

	<h1>{{ $ad->name }}</h1>

	<img src="{{ asset('') }}" alt="Image de couverture">

	<div>{{ $ad->content }}</div>

	{{-- <p><a href="{{ route('product.product.index') }}" title="Retourner aux articles" >Retourner aux ressources des produits</a></p> --}}

@endsection