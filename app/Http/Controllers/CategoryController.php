<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher toutes les catégories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Créer une nouvelle catégorie
    public function create()
    {
        return view('categories.create');
    }

    // Enregistrer une nouvelle catégorie
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return redirect()->route('categories.index');
    }

    // Afficher une catégorie spécifique
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    // Éditer une catégorie
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Mettre à jour une catégorie
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    // Supprimer une catégorie
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
