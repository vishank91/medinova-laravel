<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->require(true);
            $table->string('email', 50)->require(true);
            $table->string('phone', 15)->require(true);
            $table->string('date')->require(true);
            $table->string('time')->require(true);
            $table->bigInteger("doctorId")->unsigned()->index();
            $table->foreign("doctorId")->references("id")->on("doctors")->onDelete("cascade");
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
