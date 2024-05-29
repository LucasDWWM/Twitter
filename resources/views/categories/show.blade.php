@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <p>Crée le : {{ $category->created_at }}</p>
    </div>
@endsection
