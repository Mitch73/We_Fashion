@extends("layouts.admin")
@section("name", $ad->name)
@section("content")

	<h1>{{ $post->title }}</h1>

	<img src="{{ asset('storage/'.$ad->picture) }}" alt="Image de couverture" style="max-width: 300px;">

	<div>{{ $post->content }}</div>

	<p><a href="{{ route('admin.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>

@endsection