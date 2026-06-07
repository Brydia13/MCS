<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('subject')->nullable();
            $table->string('professor')->nullable();
            $table->string('student')->nullable();
            $table->date('date')->nullable();
            $table->text('introduccion')->nullable();
            $table->text('evidencia')->nullable();
            $table->text('conclusiones')->nullable();
            $table->text('referencias')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
