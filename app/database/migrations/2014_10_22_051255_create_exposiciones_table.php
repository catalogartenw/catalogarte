<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExposicionesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('exposiciones', function(Blueprint $table) {
                    $table->string('nombre', 500);
                    $table->date('inicio');
                    $table->date('fin');
                    $table->text('sala');
                    $table->int('tipo_hoja');
                    $table->int('presentacion');
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('exposiciones', function(Blueprint $table) {
                    //
                });
    }

}
