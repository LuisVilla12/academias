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
        Schema::create('s_c_participantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('place',255)->nullable();
            $table->string('name_place',255)->nullable();
            $table->string('level_place',100)->nullable();
            $table->string('name_docente',255)->nullable();
            $table->string('mount_girls',3)->nullable();
            $table->string('mount_boys',3)->nullable();
            $table->string('range_years',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_s_c_participantes');
    }
};
