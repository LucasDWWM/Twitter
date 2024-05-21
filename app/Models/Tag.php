<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Les champs modifiables du tag
    protected $fillable = [
        'name',
    ];

    // Relation : un tag appartient à plusieurs articles (relation many-to-many)
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
