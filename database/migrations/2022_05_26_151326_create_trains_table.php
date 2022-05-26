<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->text('Azienda');
            $table->text('Stazione_di_partenza');
            $table->text('Stazione_di_arrivo');
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->tinyInteger('Codice_Treno');
            $table->tinyInteger('Numero_Carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('trains');
    }
}
