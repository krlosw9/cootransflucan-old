<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {

            $table->id();
            $table->string('name',25);
            $table->string('enrollment',10);
            $table->string('shell',50);
            $table->string('property_number',15);
            $table->string('power',4);
            $table->string('line',4);
            $table->string('rpm',4);
            $table->string('serial_number',30);
            $table->string('helix',50);
            $table->string('paw',50);
            $table->boolean('active')->default(1);

            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('boat_type_id');

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('boat_type_id')->references('id')->on('boat_types');

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
        Schema::dropIfExists('boats');
    }
}
