@extends('layouts.main')
@section('container')

<h1 class="mb-5"> Halaman Blog Post</h1>
    
@foreach ($artikel as $artikels)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/blog/{{ $artikels->slug }}" class="text-decoration-none"> {{ $artikels->tittle }}</a></h2>
    <p>Penulis : <a href="#" class="text-decoration-none">{{ $artikels->user->name }}</a> in <a href="/categories/{{ $artikels->category->slug }}" class="text-decoration-none"> {{ $artikels->category->name }}</a></p>
    <h5>{{ $artikels->penulis }}</h5> 
    <p>{{ $artikels->excerpt }}</p> 

    <a  href="/blog/{{ $artikels->slug }}" class="text-decoration-none"> Readmore ..</a>
</article>
  
@endforeach

@endsection
