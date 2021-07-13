<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("fireExtinguisherID");
            $table->foreign("fireExtinguisherID")->on("fire_extinguishers")->references("id");
            $table->unsignedBigInteger("maintenanceType");
            $table->foreign("maintenanceType")->on("maintenance_types")->references("id");
            $table->date("maintenanceDate");
            $table->text("maintenanceComment");
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
        Schema::dropIfExists('maintenances');
    }
}
