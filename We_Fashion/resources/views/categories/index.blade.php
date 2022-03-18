@extends('layouts.master')

@section('content')
<div class="categories">
@foreach ($products as $product)
<ul class="sex"><a class="products" href="{{ route('showproduct', $product->id) }}">
        <li> {{$product->name}}</li> 
        <li> {{$product->price}}</li> 
        <li> {{$product->description}} </li> 
        <li> {{$product->visibilité}} </li> 
        <li> {{$product->etat}} </li> 
        <li> {{$product->reference}} </li>
</a></ul>      
@endforeach
</div>

@endsection
