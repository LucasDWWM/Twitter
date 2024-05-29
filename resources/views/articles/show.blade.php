@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <p>Créé par l'utilisateur ID: {{ $article->author_id }}</p>
        <p>Créé le: {{ $article->created_at }}</p>
        <p>Dernière modification le: {{ $article->updated_at }}</p>
    </div>
@endsection
