<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('location')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('type')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->string('area')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
