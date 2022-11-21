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
        Schema::create('doctor', function (Blueprint $table) {
            $table->id("doctor_id");
            $table->string("doctor_name");
            $table->string("doctor_phone");
            $table->string("doctor_email")->unique();
            $table->string("doctor_speciallist");
            $table->string("doctor_image");
            $table->string("doctor_Degree");
            $table->string("doctor_address");
            $table->string("doctor_status");
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
        Schema::dropIfExists('doctor');
    }
};
