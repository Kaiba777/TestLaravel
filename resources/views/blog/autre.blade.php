@extends('base')

@section('title', 'Mes articles')
@section('container')
    <h1>Mes articles</h1>
    
    @foreach ($posts as $post)
        <article>
            <h2><a href="{{ route('greeting', ['slug' => $post->slug, 'id' => $post->id]) }}">{{ $post->titre }}</a></h2>
            <span>
                @if ($post->category)
                        Catégorie: <strong>{{ $post->category?->nom }}</strong>   
                @endif
                @if (!$post->tags->isEmpty())
                    ,Tags :
                    @foreach ($post->tags as $tag)
                        <span><strong>{{ $tag->nom }}</strong></span>
                    @endforeach
                @endif
            </span>
            <p>{{ $post->contenu }}</p>
            <p>{{ $post->email }}</p>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection