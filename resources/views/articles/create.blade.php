@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un nouvel article</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="author_id">Auteur</label>
                <input type="number" id="author_id" name="author_id" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
