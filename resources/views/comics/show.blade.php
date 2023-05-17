@extends("layouts.app")

@section("page-title")
Fumetto: {{$comic->title}}
@endsection


@section("content")
<img src="{{$comic->thumb}}" class="img-fluid" alt="{{$comic->title}}">
<h1>{{$comic->title}}</h1>
<p>{{$comic->description}}</p>
<h4>${{$comic->price}}</h4>
@endsection