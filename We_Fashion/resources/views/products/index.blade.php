@extends('layouts.master')

@section('content')
@foreach ($products as $product)
{{-- Rendre cliquable le titre suivant $product->id --}}
<p>This is product <a href="{{ route('product', $product) }}">{{ $product->title }}</a></p>
{{-- ICI affichez les noms des produits, vérifiez qu'ils existent avant --}}
{{-- Faire un foreach Laravel pour afficher --}}
<ul>
    {{-- Vous pouvez soit écrire $book->authors()->get() soit écrire $book->authors pour récupérer les auteurs dans un itérable --}}
    @forelse ($product->authors as $author)
    <li><a href="{{ route('category', $category) }}">{{ $category->categories }}</a></li>
    <p>----------------------</p>
    @empty
    <li>Others</li>
    @endforelse
</ul>
@endforeach
@endsection


