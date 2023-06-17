<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

     public function scopeRecent($query){
        return $query->orderBy('title')->get();
        dd($query);
     }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
