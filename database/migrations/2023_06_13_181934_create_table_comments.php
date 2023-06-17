<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Post;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->morphs('commentable');
//            $table->foreignIdFor(Post::class)->constrained();
            $table->string('content', 256);
            $table->smallInteger('status')->default(0);

            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
