<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Afficher tous les tags
    public function index()
    {
        return Tag::all();
    }

    // Créer un nouveau tag
    public function store(Request $request)
    {
        $tag = Tag::create($request->all());
        return response()->json($tag, 201);
    }

    // Afficher un tag spécifique
    public function show($id)
    {
        return Tag::findOrFail($id);
    }

    // Mettre à jour un tag existant
    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return response()->json($tag, 200);
    }

    // Supprimer un tag
    public function destroy($id)
    {
        Tag::destroy($id);
        return response()->json(null, 204);
    }
}
