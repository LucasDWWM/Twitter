<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Les champs modifiables de la catégorie
    protected $fillable = [
        'name',
    ];

    // Relation : une catégorie a plusieurs articles
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
