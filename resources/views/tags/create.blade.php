@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un nouveau tag</h1>
        <form action="{{ route('tags.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
