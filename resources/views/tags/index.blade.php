@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tags</h1>
        <a href="{{ route('tags.create') }}">Créer un nouveau tag</a>
        <ul>
            @foreach($tags as $tag)
                <li>
                    <a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a>
                    <a href="{{ route('tags.edit', $tag->id) }}">Éditer</a>
                    <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
