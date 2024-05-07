<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        // Création de la table 'comments'
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // (clé primaire)
            $table->text('content'); // pour stocker le contenu du commentaire
            $table->unsignedBigInteger('article_id'); // pour stocker l'identifiant de l'article associé
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade'); // Clé étrangère liée à la table 'articles', avec option 'onDelete('cascade')'
            $table->unsignedBigInteger('user_id'); // pour stocker l'identifiant de l'utilisateur qui a posté le commentaire
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Clé étrangère liée à la table 'users', avec option 'onDelete('cascade')'
            $table->timestamp('created_at')->useCurrent(); // 'created_at' pour stocker la date et l'heure de création du commentaire, avec valeur par défaut actuelle

            // 'onDelete('cascade')' =  spécifie que si un article est supprimé, tous les commentaires associés à cet article seront également supprimés automatiquement.
            
        });
    }

    public function down()
    {
        // Suppression de la table 'comments' si elle existe
        Schema::dropIfExists('comments');
    }
};


