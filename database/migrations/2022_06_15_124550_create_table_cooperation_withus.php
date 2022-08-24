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
        Schema::create('cooperation_withus', function (Blueprint $table) {
            $table->id();
            $table->string('co_title')->nullable();
            $table->string('co_short_about')->nullable();
            $table->string('co_subcat_one')->nullable();
            $table->string('co_subcat_two')->nullable();
            $table->string('co_subcat_three')->nullable();
            $table->string('co_subcat_four')->nullable();
            $table->string('co_subcat_five')->nullable();
            $table->string('co_subcat_six')->nullable();
            $table->string('co_img')->nullable();
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
        Schema::dropIfExists('cooperation_withus');
    }
};
