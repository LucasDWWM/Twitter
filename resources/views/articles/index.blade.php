@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        <a href="{{ route('articles.create') }}">Créer un nouvel article</a>
        <ul>
            @foreach($articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                    <a href="{{ route('articles.edit', $article->id) }}">Éditer</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
