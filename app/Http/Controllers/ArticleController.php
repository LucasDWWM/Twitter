<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Afficher tous les articles
    public function index()
    {
        return Article::with('user', 'comments')->get();
    }

    // Créer un nouvel article
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    // Afficher un article spécifique
    public function show($id)
    {
        return Article::with('user', 'comments')->findOrFail($id);
    }

    // Mettre à jour un article existant
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article, 200);
    }

    // Supprimer un article
    public function destroy($id)
    {
        Article::destroy($id);
        return response()->json(null, 204);
    }
}
