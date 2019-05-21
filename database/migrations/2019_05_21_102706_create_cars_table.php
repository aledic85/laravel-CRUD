<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('displacement');
            $table->integer('max_speed');
            $table->timestamps();
        });

        DB::table('cars')->insert([

          'brand' => 'Fiat',
          'model' => 'Punto',
          'displacement' => 1400,
          'max_speed' => 180
        ]);

        DB::table('cars')->insert([

          'brand' => 'Alfa Romeo',
          'model' => 'Giulietta',
          'displacement' => 2000,
          'max_speed' => 220
        ]);

        DB::table('cars')->insert([

          'brand' => 'Ford',
          'model' => 'Fiesta',
          'displacement' => 1600,
          'max_speed' => 190
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
