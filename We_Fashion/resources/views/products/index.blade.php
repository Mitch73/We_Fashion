@extends('layouts.master')
{{-- @extends('layouts.app') --}}

@section('content')
<div class="content">
 @forelse ($products as $product)
{{-- Rendre cliquable le titre suivant $product->id --}}
{{-- <p>This is product <a href="{{ route('product', $product) }}">{{ $product->name }}</a></p> --}}
{{-- ICI affichez les noms des produits, vérifiez qu'ils existent avant --}}
{{-- Faire un foreach Laravel pour afficher --}}
    <ul class="pro">
        <a class="products" href="{{ route('showproduct', $product->id) }}">
        <li> {{$product->name}}</li> 
        <li> {{$product->price}}</li> 
        <li> {{$product->description}} </li> 
        <li> {{$product->visibility}} </li> 
        <li> {{$product->etat}} </li> 
        <li> {{$product->reference}} </li>
    </a></ul>
    @empty
    <li>No author</li>      
@endforelse
</div>
@endsection


