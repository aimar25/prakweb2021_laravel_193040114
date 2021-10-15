@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By. AIMAR <a href="/categories/{{ $post->category->slug }}"></a>{{ $post->category->name }}</p>
    {!! $post->body !!}


<a href="/posts">kembali</a>
    
@endsection