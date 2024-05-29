@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Éditer le tag</h1>
        <form action="{{ route('tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $tag->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
