@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["tittle"] }}</h2>
        {!! $post->body !!}
    </article>
    
    <a href="/posts">Back to Post</a>
@endsection