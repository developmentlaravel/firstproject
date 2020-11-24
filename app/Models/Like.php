<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'user_id', 'comment_id')->withTimestamps();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
