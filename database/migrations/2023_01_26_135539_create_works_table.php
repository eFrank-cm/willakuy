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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('quality');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('archived');
            $table->text('reason');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->timestamps();

            // foreign key
            $table->foreign('job_id')->references('id')->on('jobs')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('employee_id')->references('id')->on('employees')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};
