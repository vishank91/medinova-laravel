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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('shortDescription');
            $table->string('facebook')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('youtube')->nullable(true);
            $table->string('pic');
            $table->boolean('status')->default(true);

            $table->bigInteger("departmentId")->unsigned()->index();
            $table->foreign("departmentId")->references("id")->on("departments")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
