<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 110);
            $table->text('url');
            $table->smallInteger('type')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
