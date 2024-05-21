<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Afficher tous les commentaires
    public function index()
    {
        return Comment::with('user', 'article')->get();
    }

    // Créer un nouveau commentaire
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }

    // Afficher un commentaire spécifique
    public function show($id)
    {
        return Comment::with('user', 'article')->findOrFail($id);
    }

    // Mettre à jour un commentaire existant
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment, 200);
    }

    // Supprimer un commentaire
    public function destroy($id)
    {
        Comment::destroy($id);
        return response()->json(null, 204);
    }
}
