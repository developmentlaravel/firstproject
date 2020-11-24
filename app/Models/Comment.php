<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;
    // use ;

    protected $fillable =[];
    protected $guarded =[];

public function replys()
{
    return $this->hasMany(self::class,'parent_id');
}
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class)->withTimestamps();
    }


public function likes()
{
    return $this->hasMany(Like::class ,'comment_id' , 'user_id' );
}





// Dislikes
// public function dislikes()
// {
//     return $this->hasMany(LikeDislike::class ,'comment_id')->sum('dislike');
// }
//     public function liked()
// {
//     return (bool) Like::where('user_id', Auth::id())
//                         ->where('comment_id', $this->id)
//                         ->first();
// }

}
