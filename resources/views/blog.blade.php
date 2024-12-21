@extends('layouts.main')
@section('container')
    
@foreach ($artikel as $artikels)
<article class="mt-5">
    <h2><a href="/blog/{{ $artikels['slug'] }}"> {{ $artikels['judul'] }}</a></h2>
    <h5>{{ $artikels['penulis'] }}</h5> 
    <p>{{ $artikels['tulisan'] }}</p> 
</article>
  
@endforeach

@endsection
