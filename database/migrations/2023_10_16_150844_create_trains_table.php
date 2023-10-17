<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('azienda', 60);
            $table->string('stazione_di_partenza', 60);
            $table->string('stazione_di_arrivo', 60);
            $table->dateTime('orario_di_partenza', $precision=0);
            $table->dateTime('orario_di_arrivo', $precision=0);
            $table->string('codice_treno', 20);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->unsignedTinyInteger('numero_carrozze');
            $table->date('data');
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
};
