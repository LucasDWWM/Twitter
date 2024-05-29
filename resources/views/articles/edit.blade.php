@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Éditer l'article</h1>
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea id="content" name="content" class="form-control">{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="author_id">Auteur</label>
                <input type="number" id="author_id" name="author_id" class="form-control" value="{{ $article->author_id }}">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
