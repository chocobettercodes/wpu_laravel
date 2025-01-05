{{-- @dd($blogs) --}}
@extends('layouts.main')
@section('container')

<article>
    <h2>{{ $blogs->tittle }}</h2>
    <h5>{{ $blogs->penulis }}</h5>

    <p>Penulis : Chocobetter in <a href="/categories/{{ $blogs->category->slug }}"> {{ $blogs->category->name }}</a></p>
    {{-- <p>{{ $blogs->body}}</p> --}}
    {!! $blogs->body !!}
</article>
<a href="/blog"> Back to blog</a>
@endsection