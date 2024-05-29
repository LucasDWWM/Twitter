<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Afficher tous les articles
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Afficher le formulaire de création d'article
    public function create()
    {
        return view('articles.create');
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return redirect()->route('articles.index');
    }

    // Afficher un article spécifique
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    // Afficher le formulaire d'édition d'un article
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    // Mettre à jour un article
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.index');
    }

    // Supprimer un article
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('articles.index');
    }
}
