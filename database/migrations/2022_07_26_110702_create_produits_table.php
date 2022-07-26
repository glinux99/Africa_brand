<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('categorie');
            $table->string('marque');
            $table->string('unite');
            $table->string('quantite');
            $table->boolean('remboursable');
            $table->string('image');
            $table->string('vignette');
            $table->string('video_fournisseur');
            $table->string('lien_video');
            $table->string('couleur')->nullable();
            $table->string('prix');
            $table->string('reduction')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
