<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('type', 255);
            $table->string('name', 255);
            $table->string('photo', 255)->nullable();
            $table->float('price');
            $table->string('ingredient', 255)->nullable();
            $table->boolean('is_discount');
            $table->integer('nb_unit')->nullable();
            $table->float('discount_price')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
