<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function song()
    {
        return $this->belongsTo(Song::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
