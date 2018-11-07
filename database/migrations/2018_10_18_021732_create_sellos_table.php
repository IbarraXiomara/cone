<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_sello');
            $table->string('fecha_coloc');
            $table->string('linea_trans');
            $table->string('num_caja');
            $table->string('cliente');
            $table->string('operador');
            $table->string('sellador');
            
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
        Schema::dropIfExists('sellos');
    }
}
