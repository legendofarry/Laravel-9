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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id()->primary();
            $table->timestamps();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('tags')->nullable(true);
            $table->string('website')->nullable(true);
            $table->longText('description');
            $table->longText('logo');
            $table->string('listAll')->default('listAll');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
