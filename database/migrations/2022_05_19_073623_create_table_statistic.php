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
        Schema::create('statistic', function (Blueprint $table) {
            $table->id();
            $table->string('service_count');
            $table->string('service_districts_count');
            $table->string('branch_count');
            $table->string('employee_count');
            $table->text('cooperation_withus');
            $table->string('advantage_one');
            $table->string('advantage_two');
            $table->string('advantage_three');
            $table->string('advantage_four');
            $table->string('advantage_five');
            $table->string('advantage_six');
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
        Schema::dropIfExists('statistic');
    }
};
