<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Afficher tous les tags
    public function index()
    {
        $tags = Tag::all();

        if (request()->expectsJson()) {
            return response()->json($tags);
        }

        return view('tags.index', compact('tags'));
    }

    // Afficher le formulaire de création de tag
    public function create()
    {
        return view('tags.create');
    }

    // Enregistrer un nouveau tag
    public function store(Request $request)
    {
        $tag = Tag::create($request->all());

        if (request()->expectsJson()) {
            return response()->json($tag, 201);
        }

        return redirect()->route('tags.index');
    }

    // Afficher un tag spécifique
    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        if (request()->expectsJson()) {
            return response()->json($tag);
        }

        return view('tags.show', compact('tag'));
    }

    // Afficher le formulaire d'édition d'un tag
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    // Mettre à jour un tag
    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        if (request()->expectsJson()) {
            return response()->json($tag, 200);
        }

        return redirect()->route('tags.index');
    }

    // Supprimer un tag
    public function destroy($id)
    {
        Tag::destroy($id);

        if (request()->expectsJson()) {
            return response()->json(null, 204);
        }

        return redirect()->route('tags.index');
    }
}
