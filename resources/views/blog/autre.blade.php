@extends('base')

@section('container')
    <h1>Mes articles</h1>
    
    @foreach ($posts as $post)
        <article>
            <h2><a href="{{ route('greeting', ['slug' => $post->slug, 'id' => $post->id]) }}">{{ $post->titre }}</a></h2>
            <p>{{ $post->contenu }}</p>
            <p>{{ $post->email }}</p>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection