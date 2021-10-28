@extends('layouts/main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. <a href="/authors/{{ $post->author->username}} class="text-decoration-none">{{ $Post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}


<a href="/posts" class="d-block">kembali</a>
    
@endsection