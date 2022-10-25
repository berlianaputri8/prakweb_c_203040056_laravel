@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->tittle }}</h1>

        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a>
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>

        {!! $post->body !!}

    </article>
    
    <a href="/posts" class="d-block mt-3">Back to Post</a>
@endsection