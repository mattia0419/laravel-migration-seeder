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
            $table->string('Azienda', 60);
            $table->string('Stazione di partenza', 60);
            $table->string('Stazione di arrivo', 60);
            $table->dateTime('Orario di partenza', $precision=0);
            $table->dateTime('Orario di arrivo', $precision=0);
            $table->char('Codice treno', 5)->unique();
            $table->boolean('In orario');
            $table->boolean('Cancellato');
            $table->unsignedTinyInteger('Numero carrozze');
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
