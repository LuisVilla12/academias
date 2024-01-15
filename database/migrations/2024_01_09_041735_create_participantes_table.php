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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',255)->nullable();
            $table->string('lastname_p',255)->nullable();
            $table->string('lastname_m',255)->nullable();
            $table->string('email_institucional',255)->nullable();
            $table->string('email_personal',255)->nullable();
            $table->string('number',255)->nullable();
            $table->string('instituto',255)->nullable();
            $table->string('name_academico',255)->nullable();
            $table->string('grade_academico',255)->nullable();
            $table->string('area',255)->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
};
