<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFireExtinguishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_extinguishers', function (Blueprint $table) {
            $table->id();
            $table->integer("insideID");
            $table->integer("serialNumber");
            $table->string("place");
            $table->unsignedBigInteger("typeID");
            $table->foreign("typeID")->on("fire_extinguisher_types")->references("id");
            $table->date("productionDate");
            $table->text("comment")->nullable();
            $table->unsignedBigInteger("establishmentsID");
            $table->foreign("establishmentsID")->on("establishments")->references("id");
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
        Schema::dropIfExists('fire_extinguishers');
    }
}
