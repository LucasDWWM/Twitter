<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher tous les categoriess
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Afficher le formulaire de création d'categories
    public function create()
    {
        return view('categories.create');
    }

    // Enregistrer un nouvel categories
    public function store(Request $request)
    {
        $categories = Category::create($request->all());
        return redirect()->route('categories.index');
    }

    // Afficher un categories spécifique
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.show', compact('categories'));
    }

    // Afficher le formulaire d'édition d'un categories
    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', compact('categories'));
    }

    // Mettre à jour un categories
    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());
        return redirect()->route('categories.index');
    }

    // Supprimer un categories
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}

