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
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('ab_title1')->nullable();
            $table->text('ab_text1')->nullable();
            $table->string('ab_img1')->nullable();
            $table->string('ab_title2')->nullable();
            $table->text('ab_text2')->nullable();
            $table->string('ab_seed_analysis')->nullable();
            $table->string('ab_soil_analysis')->nullable();
            $table->string('ab_water_analysis')->nullable();
            $table->string('ab_plant_analysis')->nullable();
            $table->string('ab_fertilizer_analysis')->nullable();
            $table->string('ab_img2')->nullable();

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
        Schema::dropIfExists('aboutus');
    }
};
