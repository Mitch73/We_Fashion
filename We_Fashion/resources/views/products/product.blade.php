@extends('layouts.master')

@section('content')
<div>
    <ul>
        <li> {{$product->name}}</li> 
        <li> {{$product->price}}</li> 
        <li> {{$product->description}} </li> 
        <li> {{$product->visibility}} </li> 
        <li> {{$product->etat}} </li> 
        <li> {{$product->reference}} </li>
    </ul>
</div>    
@endsection