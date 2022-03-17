@extends('layouts.master')

@section('content')
    <div class="content">
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