@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Éditer la catégorie</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
