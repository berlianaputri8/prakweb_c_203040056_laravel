@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->tittle }}</h1>

        <p>By. Berliana Putri in 
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        {!! $post->body !!}

    </article>
    
    <a href="/posts">Back to Post</a>
@endsection