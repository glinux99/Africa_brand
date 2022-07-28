<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('images');
            $table->bigInteger('annonces_id')->nullable();
            $table->bigInteger('produits_id')->nullable();
            $table->bigInteger('imagesprofile_id')->nullable();
            $table->foreign('annonces_id')->references('id')->on('annonces')->onUpdate('cascade')->onDelete('cascade')->nullable()->unsigned();
            $table->foreign('produits_id')->references('id')->on('produits')->onUpdate('cascade')->onDelete('cascade')->nullable()->unsigned();
            $table->foreign('imagesprofile_id')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade')->nullable()->unsigned();
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
        Schema::dropIfExists('images');
    }
}
