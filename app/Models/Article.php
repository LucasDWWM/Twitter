<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'title',
        'content',
        'author_id',
    ];

    // Définir la relation avec le modèle User (auteur de l'article)
    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Définir la relation avec le modèle Comment (commentaires de l'article)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
