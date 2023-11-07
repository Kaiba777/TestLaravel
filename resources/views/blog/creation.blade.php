@extends('base')

@section('title', 'Création d\'article')
@section('container')
   <form action="" method="post">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="titre" value="{{ old('titre', 'Le bon martin') }}">
            @error("titre")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', '') }}">
            @error("slug")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="e-mail">Email</label>
            <input type="email" name="email" value="{{ old('email', 'azertyu@gmail.com') }}">
            @error("email")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="content">Contenu</label>
            <textarea name="contenu">{{ old('contenu', 'Bonjour chez article') }}</textarea>
            @error("contenu")
                {{ $message }}
            @enderror
        </div>
        <input type="submit" value="Enregistrer">
   </form>

@endsection