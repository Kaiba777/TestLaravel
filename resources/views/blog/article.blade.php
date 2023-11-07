@extends('base')

@section('title', 'Mon article')
@section('container')
     <article>
            <h1>{{ $post->titre }}</h1>
            <p>{{ $post->slug }}</p>
            <p>{{ $post->email }}</p>
            <p>{{ $post->contenu }}</p>
     </article>
@endsection