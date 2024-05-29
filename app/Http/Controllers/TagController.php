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
        return redirect()->route('tags.index');
    }

    // Afficher un tag spécifique
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
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
        return redirect()->route('tags.index');
    }

    // Supprimer un tag
    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect()->route('tags.index');
    }
}
