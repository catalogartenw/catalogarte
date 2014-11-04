<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuseosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('museos', function(Blueprint $table) {
                    //$table->increments('id');
                    $table->string('nombre', 500);
                    $table->string('siglas', 30);
                    $table->text('ruta_logo');
                    $table->text('ubicacion');
                    $table->string('telefono', 15);
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('museos', function(Blueprint $table) {
                    //
                });
    }

}
