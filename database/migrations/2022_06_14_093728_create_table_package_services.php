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
        Schema::create('package_services', function (Blueprint $table) {
            $table->id();
            $table->string('p_title');
            $table->string('p_about_short');
            $table->string('p_bottom_section_one');
            $table->string('p_bottom_section_two');
            $table->string('p_bottom_section_three');
            $table->string('p_bottom_section_four');
            $table->string('p_bottom_section_five');
            $table->string('exec_time');
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
        Schema::dropIfExists('package_services');
    }
};
