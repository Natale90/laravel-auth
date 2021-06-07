<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('name');
            $table->string('model');
            $table->integer('kw');

            // foreign key needed to make the relation between many cars to one brand
            $table->bigInteger('brand_id') -> unsigned() -> index();

            //colonna che definisce lo stato 'non deleted' della car prima che l'utente decida di cancellarla
            $table->boolean('deleted') -> default(false);

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
        Schema::dropIfExists('cars');
    }
}
