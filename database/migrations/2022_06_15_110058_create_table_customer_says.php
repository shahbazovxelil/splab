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
        Schema::create('customer_says', function (Blueprint $table) {
            $table->id();
            $table->string('c_title')->nullable();
            $table->string('c_name_surname')->nullable();
            $table->string('c_company')->nullable();
            $table->string('c_position')->nullable();
            $table->string('c_img')->nullable();
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
        Schema::dropIfExists('customer_says');
    }
};
