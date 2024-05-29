@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Catégories</h1>
        <a href="{{ route('categories.create') }}">Créer une nouvelle catégorie</a>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                    <a href="{{ route('categories.edit', $category->id) }}">Éditer</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
