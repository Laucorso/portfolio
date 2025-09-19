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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // título del proyecto
            $table->string('slug')->unique(); // slug para URL amigable
            $table->text('description')->nullable(); // descripción breve o detallada
            $table->string('image')->nullable(); // screenshot o imagen destacada
            $table->string('url')->nullable(); // link al proyecto en producción
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
