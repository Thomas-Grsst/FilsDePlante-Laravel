<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // bulbe, racine, fruit, etc.
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->json('seasons')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('plants');
    }
};