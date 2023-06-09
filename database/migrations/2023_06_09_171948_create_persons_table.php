<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 120  );
            $table->string('email', 120  );
            $table->integer('age', );
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
