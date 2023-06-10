<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug',128)->unique();
            $table->string('title',256);
            $table->text('description');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
