<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment\Status as enumStatusComment;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => enumStatusComment::class
    ];


    public function post(){
        return $this->belongsTo(Post::class);
    }
}
