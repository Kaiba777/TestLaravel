@extends('base')

@section('title', 'Modifier un article')
@section('container')
   <form action="" method="post">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="titre" value="{{ old('titre', $post->titre) }}">
            @error("titre")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}">
            @error("slug")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="e-mail">Email</label>
            <input type="email" name="email" value="{{ old('email', $post->email) }}">
            @error("email")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="content">Contenu</label>
            <textarea name="contenu">{{ old('contenu', $post->contenu) }}</textarea>
            @error("contenu")
                {{ $message }}
            @enderror
        </div>
        <input type="submit" value="Modifier">
   </form>

@endsection