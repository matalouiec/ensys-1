<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmlandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmlands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('brgy');
            $table->string('mun');
            $table->string('ownerdocno');
            $table->string('regisowner');
            $table->string('tenant');
            $table->string('lessee');
            $table->string('other');
            $table->string('rice_area');
            $table->string('farm_type');
            $table->string('corn_area');
            $table->string('vegetable_area');
            $table->string('fruit_area');
            $table->string('industrialcrop_area');
            $table->string('poultry_area');
            $table->string('agrifishery_area');
            $table->string('orgaprac');
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
        Schema::dropIfExists('farmlands');
    }
}
