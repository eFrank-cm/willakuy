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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8)->unique();
            $table->string('name');
            $table->string('last_names');
            $table->string('email')->unique()->nullable();
            $table->string('mobile_num', 20)->unique()->nullable();
            $table->string('edu_level');
            $table->string('profession');
            $table->string('specialty')->nullable();
            $table->string('degree')->nullable();
            $table->string('study_center')->nullable();
            $table->text('mention')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('employees');
    }
};
