<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher toutes les catégories
    public function index()
    {
        return Category::all();
    }

    // Créer une nouvelle catégorie
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    // Afficher une catégorie spécifique
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    // Mettre à jour une catégorie existante
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    // Supprimer une catégorie
    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(null, 204);
    }
}
