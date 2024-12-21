{{-- @dd($blogs) --}}
@extends('layouts.main')
@section('container')

<article>
    <h2>{{ $blogs['judul'] }}</h2>
    <h5>{{ $blogs['penulis'] }}</h5>
    <p>{{ $blogs['tulisan'] }}</p>
</article>
<a href="/blog"> Back to blog</a>
@endsection