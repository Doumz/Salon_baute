<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoiffuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coiffures', function (Blueprint $table) {
            $table->id();
            $table->string('titre_coiffure');
            $table->string('prix');
            $table->string('img');
            $table->string('photo');
            $table->date('date_coiffure');
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
        Schema::dropIfExists('coiffures');
    }
}
