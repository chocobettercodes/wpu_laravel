@extends('layouts.main')
@section('container')

<h1 class="mt-5"> Post Category : {{ $category }}</h1>
    
@foreach ($artikel as $artikels)
<article class="mt-5">
    <h2><a href="/blog/{{ $artikels->slug }}"> {{ $artikels->tittle }}</a></h2>
    <h5>{{ $artikels->penulis }}</h5> 
    <p>{{ $artikels->excerpt }}</p> 
</article>
  
@endforeach

@endsection
